<?php
namespace AHT\Controllers;

use AHT\Models\User;

class HomeController 
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}