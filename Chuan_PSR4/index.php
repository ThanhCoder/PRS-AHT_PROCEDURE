<?php

require __DIR__ . '/vendor/autoload.php';

use AHT\Controllers\HomeController;
use AHT\Repositories\HomeRepository;

$homeController =  new HomeController;
$homeRepo = new HomeRepository;

$homeRepo->hello();

echo "<pre>";
print_r($homeController->actionIndex());
echo "</pre>";