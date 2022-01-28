<?php

namespace App\Models;

use App\Entities\FinishedTest;
use App\Entities\WonderlicTestResponse;
use CodeIgniter\Model;

class ResponsesModel extends Model
{
    protected $table      = 'test_responses';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = WonderlicTestResponse::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['test_id', 'question_id','response','response_time'];

    protected $useTimestamps = false;

    public function insert($data = null, bool $returnID = true) : ?int
    {
        $data->response_time = time();
        return parent::insert($data, $returnID);
    }

    public function getAnswers(int $test_id):FinishedTest{
        $this->select(['test_questions.question, test_questions.response_1 AS option_1, test_questions.response_2'.
            ' AS option_2, test_questions.response_3 AS option_3,test_questions.response_4 AS option_4,test_questions.response_5 AS option_5,'.
            ' test_responses.response AS user_response, test_questions.correct_response AS correct_response, test_questions.image AS image'],false);
        $this->join('test_questions','test_responses.question_id = test_questions.id',);
        $this->where('test_id',$test_id);
        return new FinishedTest($this->findAll());
    }
}