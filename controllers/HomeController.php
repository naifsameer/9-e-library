<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * Class Post controller
 * @package app\controllers
 */
class HomeController
{
    public static function index()
    {
        Router::render('index');
    }
}
