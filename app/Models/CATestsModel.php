<?php

namespace App\Models;

use App\Entities\CATest;
use CodeIgniter\Model;

class CATestsModel extends Model
{
    protected $table      = 'ca_tests';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = CATest::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['candidate_id', 'start_time','end_time'];

    protected $useTimestamps = false;
}