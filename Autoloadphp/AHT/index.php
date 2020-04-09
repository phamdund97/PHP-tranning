<?php
require __DIR__ . '/vendor/autoload.php';

use AHT\Controllers\HomeController;
use AHT\Repositories\HomeRepository;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;

print_r($homeCtrl->actionIndex());
$homeRps->hello(); // Hello - vì đã được load thành công
?>