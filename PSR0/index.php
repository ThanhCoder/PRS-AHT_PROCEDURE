<?php

require __DIR__ . '/vendor/autoload.php';

use Controllers\HomeController;

$homeController =  new HomeController;

echo "<pre>";
print_r($homeController->actionIndex());
echo "</pre>";