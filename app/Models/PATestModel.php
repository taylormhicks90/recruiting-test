<?php

namespace App\Models;

use App\Entities\PATest;

class PATestModel extends \CodeIgniter\Model
{
    protected $table      = 'pa_assessment';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = PATest::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['candidate_id', 'a_answers','b_answers','c_answers','d_answers'];

    protected $useTimestamps = false;

}