<?php

namespace App\Controllers;

use App\Entities\PATest;
use App\Models\PATestModel;
use App\Models\ResponsesModel;
use App\Models\WonderlicTestModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use function PHPUnit\Framework\isEmpty;

class Home extends BaseController
{
    public function index(string $candidate_id = null): string
    {
        if(is_null($candidate_id)) $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound();
        $this->session->set('candidate_id',$candidate_id);
        $wonderlicTestModel = model(WonderlicTestModel::class);
        $wonderlicTestCompleted = !is_null($wonderlicTest = $wonderlicTestModel->where('candidate_id',$candidate_id)->first());
        $this->setViewData('wonderlicTestCompleted',$wonderlicTestCompleted);
        if($wonderlicTestCompleted) {
            $responsesModel = model(ResponsesModel::class);
            $wonderlicTest = $responsesModel->getAnswers($wonderlicTest->id);
            $this->setViewData('wonderlicTest', $wonderlicTest);
        }
        $paTestModel = model(PATestModel::class);
        $paTestCompleted =!is_null($paTest = $paTestModel->where('candidate_id',$candidate_id)->first());
        $this->setViewData('paTestCompleted',$paTestCompleted);
        if ($paTestCompleted) $this->setViewData('paTest',$paTest);
        return $this->_render('Home/tests_overview');
    }
}
