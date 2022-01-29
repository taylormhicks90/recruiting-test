<?php

namespace App\Models;

use App\Entities\FinishedTest;
use App\Entities\CATestResponse;
use CodeIgniter\Model;

class CAResponsesModel extends Model
{
    protected $table      = 'ca_test_responses';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = CATestResponse::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['test_id', 'question_id','response','response_time'];

    protected $useTimestamps = false;

    public function insert($data = null, bool $returnID = true) : ?int
    {
        $data->response_time = time();
        return parent::insert($data, $returnID);
    }

    public function getAnswers(int $test_id):FinishedTest{
        $this->select(['ca_test_questions.id as id, ca_test_questions.question, ca_test_questions.response_1 AS option_1, ca_test_questions.response_2'.
            ' AS option_2, ca_test_questions.response_3 AS option_3, ca_test_questions.response_4 AS option_4,'.
            ' ca_test_responses.response AS user_response, ca_test_questions.correct_response AS correct_response, ca_test_questions.image AS image'],false);
        $this->join('ca_test_questions','ca_test_responses.question_id = ca_test_questions.id',);
        $this->where('test_id',$test_id);
        return new FinishedTest($this->findAll());
    }
}