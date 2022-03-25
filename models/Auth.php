<?php

namespace app\models;

use app\helpers\SessionHelper;

SessionHelper::run_session();

use app\config\Database;
use app\helpers\UtilHelper;

/**
 * Auth
 * @package app\models
 */
class Auth extends Model
{
  public static function login($email, $password)
  {
    $user_data  = self::table('users')
      ->select("email", "usersID", "password")
      ->where('email', $email)
      ->and('password', $password)
      ->get();

    if ($user_data) {
      SessionHelper::setSession(SessionHelper::$AUTH, true);
      SessionHelper::setSession(SessionHelper::$USER_ID, $user_data['usersID']);
      return true;
    }

    return false;
  }
}
