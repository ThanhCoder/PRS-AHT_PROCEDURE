<?php

namespace Controllers;

use Repositories\HomeRepository;
use Models\User;

class HomeController{
    public  function actionIndex(){
        return (new User)->list();
        echo (new HomeRepository)->hello(); 
    }
}