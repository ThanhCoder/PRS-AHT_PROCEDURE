<?php

namespace AHT\Controllers;

use AHT\Repositories\HomeRepository;
use AHT\Models\User;

class HomeController{
    public  function actionIndex(){
        return (new User)->list();
        echo (new HomeRepository)->hello(); 
    }
}