<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;
use app\models\Book;
use app\models\Category;

/**
 * @package app\controllers
 */
class PageController
{
    public static function index()
    {
        $home_data['categories'] = Category::getAll();
        $home_data['books'] = Book::getAll();

        Router::render('index', $home_data);
    }

    public static function categories()
    {
        Router::render('categories');
    }

    public static function checkout()
    {
        Router::render('checkout');
    }

    public static function productDetails()
    {
        Router::render('product-details');
    }

    public static function shoppingCart()
    {
        Router::render('shopping-cart');
    }
}
