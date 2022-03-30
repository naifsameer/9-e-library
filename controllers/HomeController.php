<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;
use app\models\Book;
use app\models\Category;

/**
 * @package app\controllers
 */
class HomeController
{
    public static function index()
    {
        $home_data['categories'] = Category::getAll();
        $home_data['books'] = Book::getAll();

        Router::render('index', $home_data);
    }
}
