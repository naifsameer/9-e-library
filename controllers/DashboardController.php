<?php

namespace app\controllers;

use app\helpers\SessionHelper;

SessionHelper::run_session();

use app\helpers\UtilHelper;
use app\config\Router;

/**
 * @package app\controllers
 */
class DashboardController
{
  public static function index()
  {
    if (SessionHelper::getSession(SessionHelper::$AUTH)) {
      Router::render('dashboard');
    } else {
      Router::redirect("/login");
    }
  }
}
