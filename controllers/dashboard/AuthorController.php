<?php

namespace app\controllers\dashboard;

use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\Author;

/**
 * @package app\controllers
 */
class AuthorController
{
  public static function index()
  {

    $result = Author::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $bio = $_POST['bio'] ?? '';


    $errors = ValidateHelper::validateAll(
      [
        'name' => $name,
        'phone' => $phone,
        'phone' => $phone,
        'email' => $email,
        'bio' => $bio,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = Author::add([
        'name' => $name,
        'phone' => $phone,
        'phone' => $phone,
        'email' => $email,
        'bio' => $bio,
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {
      ApiHelper::sendJson($errors);
    }
  }
}
