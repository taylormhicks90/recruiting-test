<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CATestResponse extends Entity
{
    public function isCorrect(){
        return !(is_null($this->user_response) || is_null($this->correct_response)) && $this->user_response === $this->correct_response;
    }
}