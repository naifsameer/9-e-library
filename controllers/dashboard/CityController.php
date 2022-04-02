<?php

namespace app\controllers\dashboard;

use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\City;

/**
 * @package app\controllers
 */
class CityController
{
  public static function index()
  {

    $result = City::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $name = $_POST['name'] ?? '';

    $errors = ValidateHelper::validate(
      ['name' => $name],
      ['name' => 'required',]
    );

    if (!is_array($errors)) {
      $result = City::add([
        "name" => $name,
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {

      ApiHelper::sendJson($errors);
    }
  }
}
