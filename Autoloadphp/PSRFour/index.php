<?php
    require __DIR__ . '/vendor/autoload.php';

    use PSRFour\Controllers\HomeController;
    use PSRFour\Repositories\HomeRepository;

    $homeCtrl = new HomeController;
    $homeRps = new HomeRepository;

    print_r($homeCtrl->actionIndex());
    $homeRps->hello(); // Hello, I am Du - vì đã được load thành công
?>