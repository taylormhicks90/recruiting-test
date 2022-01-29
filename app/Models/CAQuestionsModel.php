<?php

namespace App\Models;

use App\Entities\CATestQuestion;
use CodeIgniter\Model;

class CAQuestionsModel extends Model
{
    protected $table      = 'ca_test_questions';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = CATestQuestion::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['question','image', 'response_1','response_2', 'response_3','response_4','correct_response'];

    protected $useTimestamps = false;

    public function getTest(){
        return $this->select('id,question,image,response_1,response_2,response_3,response_4')->findAll(50);
    }

}