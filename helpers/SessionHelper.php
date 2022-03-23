<?php

namespace app\helpers;


class SessionHelper
{
  public static $AUTH = 'auth';
  public static $USER_ID = 'userID';

  private function __construct()
  {
  }

  public static function run_session(): void
  {
    if (!isset($_SESSION)) {
      session_start();
    }
  }

  public static function getSession(string $key)
  {
    return $_SESSION[$key] ?? false;
  }

  public static function setSession(string $key, $value)
  {
    return $_SESSION[$key] = $value;
  }

  // public static function rest_session()
  // {
  //   $_SERVER[self::$auth] = false;
  //   $_SERVER[self::$userID] = null;
  // }
}
