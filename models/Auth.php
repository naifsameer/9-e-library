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
  public static $table_name = 'users';

  public static function login($email, $password)
  {
    $user_data  = self::table()
      ->select("email", "usersID", "password")
      ->where('email', $email)
      ->and('password', $password)
      ->one();

    if ($user_data) {
      SessionHelper::setSession(SessionHelper::$AUTH, true);
      SessionHelper::setSession(SessionHelper::$USER_ID, $user_data['usersID']);
      return true;
    }

    return false;
  }
}
