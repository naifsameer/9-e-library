<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\PaymentMethod;

/**
 * @package app\controllers
 */
class PaymentMethodController
{
  public static function index()
  {

    $result = PaymentMethod::getAll();

    ApiHelper::sendJson($result);
  }

  public static function show()
  {
    $userPaymentID = $_GET['id'] ?? '';
    $result = PaymentMethod::getOneByID($userPaymentID);

    if (!$result) {
      ApiHelper::sendJson(['error' => 'user payment method not found']);
      exit;
    }

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    // user_id
    // payment_id

    $user_id = $_POST['user_id'] ?? '';
    $payment_id = $_POST['payment_id'] ?? '';


    $errors = ValidateHelper::validateAll(
      [
        'user_id' => $user_id,
        'payment_id' => $payment_id,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = PaymentMethod::add([
        'user_id' => $user_id,
        'payment_id' => $payment_id,
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {
      ApiHelper::sendJson($errors);
    }
  }
}
