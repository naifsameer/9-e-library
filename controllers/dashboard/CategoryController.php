<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\config\Router;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\Category;

/**
 * @package app\controllers
 */
class CategoryController
{
  public static function index()
  {

    $result = Category::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $name = $_POST['name'] ?? '';
    $image = UtilHelper::uploadImage($_FILES['image']);

    $errors = ValidateHelper::validate(
      ['name' => $name, 'image' => $image],
      [
        'name' => 'required',
        'image' => 'required'
      ]
    );

    if (!is_array($errors)) {
      $result = Category::add([
        "name" => $name,
        "image" => $image
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {

      ApiHelper::sendJson($errors);
    }
  }
}
