<?php

namespace app\controllers\dashboard;

use app\helpers\UtilHelper;
use app\config\Router;
use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\Book;
use app\models\Category;

/**
 * @package app\controllers
 */
class BookController
{
  public static function index()
  {

    $result = Book::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    $title = $_POST['title'] ?? '';
    $price = $_POST['price'] ?? '';
    $pages_number = $_POST['pages_number'] ?? '';
    $quantity = $_POST['quantity'] ?? '';
    $format = $_POST['format'] ?? '';
    $publisher_id = $_POST['publisher_id'] ?? '';
    $author_id = $_POST['author_id'] ?? '';
    $category_id = $_POST['category_id'] ?? '';
    $description = $_POST['description'] ?? '';

    $image = UtilHelper::uploadImage($_FILES['image']);

    $errors = ValidateHelper::validateAll(
      [
        'title' => $title,
        'price' => $price,
        'pages_number' => $pages_number,
        'quantity' => $quantity,
        'format' => $format,
        'publisher_id' => $publisher_id,
        'author_id' => $author_id,
        'category_id' => $category_id,
        'description' => $description,
        'image' => $image,
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = Book::add([
        'title' => $title,
        'price' => $price,
        'pages_number' => $pages_number,
        'quantity' => $quantity,
        'format' => $format,
        'publisher_id' => $publisher_id,
        'author_id' => $author_id,
        'category_id' => $category_id,
        'description' => $description,
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
