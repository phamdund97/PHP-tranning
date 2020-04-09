<?php
require __DIR__ . '/vendor/autoload.php';

use Controllers\HomeController;

$homeCtrl = new HomeController;

print_r($homeCtrl->actionIndex());