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
    // only for debugging todo remove it later
    SessionHelper::setSession(SessionHelper::$AUTH, true);

    if (SessionHelper::getSession(SessionHelper::$AUTH)) {
      // Router::render('dashboard/index');
      Router::vue();
    } else {
      Router::redirect("/login");
    }
  }

  public static function upload()
  {
    // only for debugging todo remove it later
    print_r(json_encode([$_POST, $_FILES]));

    UtilHelper::uploadImage($_FILES['image']);
  }
}
