<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\User;

/**
 * @package app\controllers
 */
class UserController
{
  public static function index()
  {

    $result = User::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role_id = $_POST['role_id'] ?? '';


    $errors = ValidateHelper::validateAll(
      [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role_id' => $role_id,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = User::add([
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'role_id' => $role_id,
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {
      ApiHelper::sendJson($errors);
    }
  }
}
