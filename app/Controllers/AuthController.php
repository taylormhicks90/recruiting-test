<?php

namespace App\Controllers;

use Myth\Auth\Controllers\AuthController as MythController;

class AuthController extends MythController
{
    use ViewManager;


    public function __construct()
    {
        parent::__construct();
        $this->initViewManager();
    }


}