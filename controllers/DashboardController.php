<?php

namespace app\controllers;

use app\helpers\SessionHelper;

SessionHelper::run_session();

use app\helpers\UtilHelper;
use app\models\Post;
use app\config\Router;

/**
 * Class Dashboard controller
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

  public static function checkout()
  {
    // if (SessionHelper::getSession(SessionHelper::$AUTH)) {
    Router::render('dashboard/checkout');
    // } 
    // else {
    //   Router::redirect("/login");
    // }
  }



  public static function add()
  {
    // if (SessionHelper::getSession(SessionHelper::$AUTH)) {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // header("Content-Type: application/json");
    header("body: 'content here'");
    echo (json_encode(['Hi there' => "naif"]));
    // echo 'hi';
    exit;
    // } 
    // else {
    //   Router::redirect("/login");
    // }
  }
}
