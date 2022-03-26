<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * @package app\controllers
 */
class ShoppingCartController
{
  public static function index()
  {
    Router::render('checkout');
  }
}
