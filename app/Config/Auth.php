<?php

namespace App\Config;

class Auth extends \Myth\Auth\Config\Auth
{
    /**
     * --------------------------------------------------------------------
     * Views used by Auth Controllers
     * --------------------------------------------------------------------
     *
     * @var array
     */
    public $views = [
        'login'		   => 'Auth\Views\login',
        'register'		=> 'Auth\Views\register',
        'forgot'		  => 'Auth\Views\forgot',
        'reset'		   => 'Auth\Views\reset',
        'emailForgot'	 => 'Auth\Views\emails\forgot',
        'emailActivation' => 'Auth\Views\emails\activation',
    ];
    public $viewLayout = 'Layouts/default';
    public $allowRemembering = true;
}