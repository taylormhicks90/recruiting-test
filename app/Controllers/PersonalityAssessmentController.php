<?php

namespace App\Controllers;

use App\Entities\PATest;
use App\Models\PATestModel;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Exceptions\PageNotFoundException;

class PersonalityAssessmentController extends BaseController
{
    public function test(): string
    {
        $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound('Candidate ID not found');
        return $this->_render('PersonalityAssessment/test');
    }

    public function score_test(): void
    {
        $paTest = new PATest();
        $paTest->candidate_id = $this->session->get('candidate_id');
        $paTest->fill($this->request->getPost(['a', 'b', 'c', 'd']));
        $paTestModel = model(PATestModel::class);
        try {
            $paTestModel->insert($paTest);
        } catch (\ReflectionException | DataException) {
            throw new DatabaseException('Unable to Save Test');
        }
        $this->response->redirect('/patest/view-results');
    }

    public function test_results(?string $candidate_id = null): string
    {
        if (is_null($candidate_id)) {
            $candidate_id = $this->session->get('candidate_id') ?? throw PageNotFoundException::forPageNotFound();
        }
        $paTestModel = model(PATestModel::class);
        $paTest = $paTestModel->where('candidate_id', $candidate_id)->first() ?? throw PageNotFoundException::forPageNotFound();
        $this->setViewData('test', $paTest);
        return $this->_render('PersonalityAssessment/test_results');
    }
}