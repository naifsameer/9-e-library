<?php

namespace app\controllers\dashboard;

use app\helpers\ApiHelper;
use app\models\Role;

/**
 * @package app\controllers
 */
class RoleController
{
  public static function index()
  {

    $result = Role::getAll();

    ApiHelper::sendJson($result);
  }

  // public static function store()
  // {
  //   $name = $_POST['name'] ?? '';
  //   $email = $_POST['email'] ?? '';
  //   $password = $_POST['password'] ?? '';
  //   $role_id = $_POST['role_id'] ?? '';


  //   $errors = ValidateHelper::validateAll(
  //     [
  //       'name' => $name,
  //       'email' => $email,
  //       'password' => $password,
  //       'role_id' => $role_id,
  //     ],
  //     'required'
  //   );

  //   if (!is_array($errors)) {
  //     $result = User::add([
  //       'name' => $name,
  //       'email' => $email,
  //       'password' => $password,
  //       'role_id' => $role_id,
  //     ]);

  //     ApiHelper::sendJson([
  //       "success" => $result
  //     ]);
  //   } else {
  //     ApiHelper::sendJson($errors);
  //   }
  // }
}
