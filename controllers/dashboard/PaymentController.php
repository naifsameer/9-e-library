<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\Payment;

/**
 * @package app\controllers
 */
class PaymentController
{
  public static function index()
  {

    $result = Payment::getAll();

    ApiHelper::sendJson($result);
  }

  public static function show()
  {
    $userPaymentID = $_GET['id'] ?? '';
    $result = Payment::getOneByID($userPaymentID);

    if (!$result) {
      ApiHelper::sendJson(['error' => 'payment not found']);
      exit;
    }

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $name = $_POST['name'] ?? '';

    $image = UtilHelper::uploadImage($_FILES['image']);

    $errors = ValidateHelper::validateAll(
      [
        'name' => $name,
        'image' => $image,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = Payment::add([
        'name' => $name,
        'image' => $image,
      ]);

      // remove image if the data didn't add to database
      if (!$result) {
        UtilHelper::removeImage($image);
      }

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {
      $i = UtilHelper::removeImage($image);

      ApiHelper::sendJson([$errors, $i]);
    }
  }
}
