<?php

namespace Config;

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
        'login'		   => 'Auth\login',
        'register'		=> 'Auth\register',
        'forgot'		  => 'Auth\forgot',
        'reset'		   => 'Auth\reset',
        'emailForgot'	 => 'Auth\emails\forgot',
        'emailActivation' => 'Auth\emails\activation',
    ];
    public $viewLayout = 'Layouts/default';
    public $allowRemembering = true;
}