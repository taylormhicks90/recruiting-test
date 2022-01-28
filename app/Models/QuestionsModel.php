<?php

namespace App\Models;

use App\Entities\WonderlicTestQuestion;
use CodeIgniter\Model;

class QuestionsModel extends Model
{
    protected $table      = 'test_questions';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = WonderlicTestQuestion::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['question','image', 'response_1','response_2', 'response_3','response_4','correct_response'];

    protected $useTimestamps = false;

    public function getTest(){
        return $this->select('id,question,image,response_1,response_2,response_3,response_4,response_5')->findAll(50);
    }

}