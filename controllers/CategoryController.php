<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * @package app\controllers
 */
class CategoryController
{
  public static function index()
  {
    Router::render('categories');
  }
}
