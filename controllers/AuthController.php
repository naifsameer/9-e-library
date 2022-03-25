<?php

namespace app\controllers;

use app\helpers\SessionHelper;

SessionHelper::run_session();

use app\helpers\UtilHelper;
use app\helpers\ValidateHelper;
use app\models\Auth;
use app\config\Router;

/**
 * Auth controller
 * @package app\controllers
 */
class AuthController
{
  public static $isLogin = false;

  public static function  login()
  {
    Router::render('login');
  }

  public static function  store()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validator = ValidateHelper::validate(
      ["email" => $email, "password" => $password],
      ["email" => "required|email", "password" => "required|min:8|max:40"]
    );

    if (is_array($validator)) {
      Router::render('login', [
        "email" => $email,
        "password" => $password,
        "error" => $validator
      ]);
    } else {
      // check if user is valid 
      if (Auth::login($email, $password)) {
        Router::redirect("/dashboard");
      } else {
        Router::render('login', [
          "email" => $email,
          "password" => $password,
          "error" => "Email or password is wrong😩"
        ]);
      }
    }
  }

  public static function  logout()
  {
    session_destroy();

    Router::redirect('/login');
  }
}
