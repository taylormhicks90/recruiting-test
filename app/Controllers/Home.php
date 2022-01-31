<?php

namespace App\Controllers;

use App\Models\PATestModel;
use App\Models\CAResponsesModel;
use App\Models\CATestsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(string $candidate_id = null): string
    {
        if(is_null($candidate_id)) $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound();
        $this->session->set('candidate_id',$candidate_id);
        $caTestsModel = model(CATestsModel::class);
        $caTestCompleted = !is_null($caTest = $caTestsModel->where('candidate_id',$candidate_id)->first());
        $this->setViewData('caTestCompleted',$caTestCompleted);
        if($caTestCompleted) {
            $responsesModel = model(CAResponsesModel::class);
            $caTest = $responsesModel->getAnswers($caTest->id);
            $this->setViewData('caTest', $caTest);
        }
        $paTestModel = model(PATestModel::class);
        $paTestCompleted =!is_null($paTest = $paTestModel->where('candidate_id',$candidate_id)->first());
        $this->setViewData('paTestCompleted',$paTestCompleted);
        if ($paTestCompleted) $this->setViewData('paTest',$paTest);
        return $this->_render('Home/tests_overview');
    }
}
