<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return $this->_render('welcome_message');
    }
}
