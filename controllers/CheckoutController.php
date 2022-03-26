<?php

namespace app\controllers;

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * @package app\controllers
 */
class CheckoutController
{
  public static function index()
  {
    Router::render('checkout');
  }
}
