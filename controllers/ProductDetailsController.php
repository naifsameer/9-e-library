<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * @package app\controllers
 */
class ProductDetailsController
{
  public static function index()
  {
    Router::render('product-details');
  }
}
