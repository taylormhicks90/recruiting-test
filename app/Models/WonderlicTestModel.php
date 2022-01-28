<?php

namespace App\Models;

use App\Entities\WonderlicTest;
use CodeIgniter\Model;

class WonderlicTestModel extends Model
{
    protected $table      = 'tests';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = WonderlicTest::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['candidate_id', 'start_time','end_time'];

    protected $useTimestamps = false;
}