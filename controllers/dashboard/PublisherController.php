<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\Publisher;

/**
 * @package app\controllers
 */
class PublisherController
{
  public static function index()
  {

    $result = Publisher::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {


    // name
    // phone
    // alt_phone
    // fax
    // email
    // address
    // country
    // image

    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $alt_phone = $_POST['alt_phone'] ?? '';
    $fax = $_POST['fax'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $country = $_POST['country'] ?? '';

    $image = UtilHelper::uploadImage($_FILES['image']);

    $errors = ValidateHelper::validateAll(
      [
        'name' => $name,
        'phone' => $phone,
        'alt_phone' => $alt_phone,
        'fax' => $fax,
        'email' => $email,
        'address' => $address,
        'country' => $country,
        'image' => $image,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = Publisher::add([
        'name' => $name,
        'phone' => $phone,
        'alt_phone' => $alt_phone,
        'fax' => $fax,
        'email' => $email,
        'address' => $address,
        'country' => $country,
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
      ApiHelper::sendJson($errors);
    }
  }
}
