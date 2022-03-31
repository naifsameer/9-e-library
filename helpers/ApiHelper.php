<?php

namespace app\helpers;


class ApiHelper
{
  private function __construct()
  {
  }

  public static function sendJson(array $data)
  {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // header("body: 'content here'");
    echo (json_encode($data));
  }

  public static function getHeader($name)
  {
    return $_SERVER['HTTP_' . strtoupper($name)] ?? '';
  }
}
