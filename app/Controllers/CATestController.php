<?php

namespace App\Controllers;

use App\Entities\CATest;
use App\Entities\CATestResponse;
use App\Models\CAQuestionsModel;
use App\Models\CAResponsesModel;
use App\Models\CATestsModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Exceptions\PageNotFoundException;
use http\Exception\RuntimeException;
use ReflectionException;

class CATestController extends BaseController
{

    /**
     * @return string
     * @throws \CodeIgniter\Database\Exceptions\DatabaseException
     */
    public function start_test()
    {
        $candidate_id = $this->session->get('candidate_id')?? throw PageNotFoundException::forPageNotFound('Candidate ID not found');

        $test_model = model(CATestsModel::class);
        $test_questions = model(CAQuestionsModel::class)->getTest();
        $testResponseModel = model(CAResponsesModel::class);

        $CATest = new CATest();
        $testResponse = new CATestResponse();

        $CATest->candidate_id = $candidate_id;
        try {
            $testID = $test_model->insert($CATest, true);
            $this->session->set('CATestId', $testID);

            $testResponse->test_id = $testID;
            foreach ($test_questions as $question) {
                $testResponse->question_id = $question->id;
                $testResponseModel->insert($testResponse);
            }
        }catch (ReflectionException|DataException $exception){
            throw new DatabaseException('Unable To Create Test');
        }
        $this->setViewData('firstQuestion',$test_questions[0]);
        $this->setViewData('testQuestions', json_encode($test_questions));
        $this->setViewData('testID',$testID);
        return $this->_render('CATest/test');
    }

    /**
     *
     */
    public function record_response()
    {
        $this->response->setContentType('application/json');
        try {
            $this->save_response();
            $this->response->setJSON(['message' => 'Successfully recorded response','code' => 200],true);
        } /** @noinspection PhpRedundantCatchClauseInspection */ catch (ReflectionException|DataException){
            $this->response->setStatusCode(500);
            $this->response->setJSON(['message' =>'Failed to record response','code' => 500],true);
        }finally{
            $this->response->send();
        }
    }

    /**
     *
     */
    public function finish_test()
    {
        $this->response->setContentType('application/json');
        try {
            $this->save_response();
            $test = new CATest(['end_time' => time()]);
            $testModel = model(CATestsModel::class);
            $testModel->update($this->session->get('CATestID'),$test);
            $this->response->setJSON(['message' => 'Successfully finished test','code' => 200],true);
        }catch (ReflectionException|DataException){
            $this->response->setStatusCode(500);
            $this->response->setJSON(['message' =>'Failed to finish test', 'code' => 500],true);
        }finally{
            $this->response->send();
        }

    }

    /**
     * @throws \ReflectionException
     */
    private function save_response() : void{
        $allowedFields = ['question_id','response'];
        $input = $this->request->getJSON(true);
        $testResponse = new CATestResponse($this->request->getJSON(true));
        $testResponse->test_id = $this->session->get('CATestId');
        $testResponseModel = model(CAResponsesModel::class);
        $testResponseModel->where('test_id',$testResponse->test_id)->where('question_id',$testResponse->question_id)->update(null,$testResponse);
    }


    /**
     * @param string|null $candidate_id
     * @return string
     */
    public function view_results(string $candidate_id = null){
        if(is_null($candidate_id)){
            $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound();
        }
        $testModel = model(CATestsModel::class);
        $testID = $testModel->where('candidate_id',$candidate_id)->first()?->id?? throw PageNotFoundException::forPageNotFound();
        $testModel = model(CAResponsesModel::class);
        $responses = $testModel->getAnswers($testID);
        $this->setViewData('scoredTest',$responses);
        return $this->_render('CATest/test_results');
    }
}