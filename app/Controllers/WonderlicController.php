<?php

namespace App\Controllers;

use App\Entities\WonderlicTest;
use App\Entities\WonderlicTestResponse;
use App\Models\QuestionsModel;
use App\Models\ResponsesModel;
use App\Models\WonderlicTestModel;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Exceptions\PageNotFoundException;
use ReflectionException;

class WonderlicController extends BaseController
{

    public function start_test()
    {
        $candidate_id = $this->session->get('candidate_id')?? throw PageNotFoundException::forPageNotFound('Candidate ID not found');
        $wonderlicTest = new WonderlicTest();
        $test_model = model(WonderlicTestModel::class);
        $test_questions = model(QuestionsModel::class)->getTest();
        $this->session->set('candidateId', $wonderlicTest->candidate_id = $candidate_id);
        $this->session->set('wonderlicTestStartTime', $wonderlicTest->start_time = time());
        $this->session->set('wonderlicTestId', $testID = $test_model->insert($wonderlicTest,true));
        $this->session->set('testQuestions',$test_questions);
        $testResponseModel = model(ResponsesModel::class);
        $testResponse = new WonderlicTestResponse();
        $testResponse->test_id = $testID;
        foreach ($test_questions as $question){
            $testResponse->question_id = $question->id;
            $testResponseModel->insert($testResponse);
        }
        $this->setViewData('firstQuestion',$test_questions[0]);
        $this->setViewData('testQuestions', json_encode($test_questions));
        $this->setViewData('testID',$testID);
        return $this->_render('Wonderlic/test');
    }
    public function record_response()
    {
        $this->response->setContentType('application/json');
        try {
            $this->save_response();
            $this->response->setJSON(['message' => 'Successfully recorded response','code' => 200],true);
        }catch (ReflectionException|DataException){
            $this->response->setStatusCode(500);
            $this->response->setJSON(['message' =>'Failed to record response','code' => 500],true);
        }finally{
            $this->response->send();
        }
    }

    public function finish_test()
    {
        $this->response->setContentType('application/json');
        try {
            $this->save_response();
            $test = new WonderlicTest(['end_time' => time()]);
            $testModel = model(WonderlicTestModel::class);
            $testModel->update($this->session->get('testID'),$test);
            $this->response->setJSON(['message' => 'Successfully finished test','code' => 200],true);
        }catch (ReflectionException|DataException){
            $this->response->setStatusCode(500);
            $this->response->setJSON(['message' =>'Failed to finish test', 'code' => 500],true);
        }finally{
            $this->response->send();
        }

    }
    private function save_response() : void{
        $allowedFields = ['question_id','response'];
        $input = $this->request->getJSON(true);
        $testResponse = new WonderlicTestResponse($this->request->getJSON(true));
        $testResponse->test_id = $this->session->get('wonderlicTestId');
        $testResponseModel = model(ResponsesModel::class);
        $testResponseModel->where('test_id',$testResponse->test_id)->where('question_id',$testResponse->question_id)->update(null,$testResponse);
    }


    public function view_results(string $candidate_id = null){
        if(is_null($candidate_id)){
            $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound();
        }
        $testModel = model(WonderlicTestModel::class);
        $testID = $testModel->where('candidate_id',$candidate_id)->first()?->id?? throw PageNotFoundException::forPageNotFound();
        $testModel = model(ResponsesModel::class);
        $responses = $testModel->getAnswers($testID);
        $this->setViewData('scoredTest',$responses);
        return $this->_render('Wonderlic/test_results');
    }
}