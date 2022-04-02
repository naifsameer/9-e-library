<?php

namespace app\controllers\dashboard;

use app\helpers\ApiHelper;
use app\helpers\ValidateHelper;
use app\models\City;
use app\models\Offer;

/**
 * @package app\controllers
 */
class OfferController
{
  public static function index()
  {

    $result = Offer::getAll();

    ApiHelper::sendJson($result);
  }

  public static function store()
  {
    // id	title	discount	start_date	end_date	book_ids	category_ids	all_books
    $title = $_POST['title'] ?? '';
    $discount = $_POST['discount'] ?? '';
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $book_ids = $_POST['book_ids'] ?? '';
    $category_ids = $_POST['category_ids'] ?? '';
    $all_books = $_POST['all_books'] ?? 1;

    $errors = ValidateHelper::validateAll(
      [
        "title" => $title,
        "discount" => $discount,
        "start_date" => $start_date,
        "end_date" => $end_date
      ],
      'required'
    );

    if (!is_array($errors)) {
      $result = Offer::add([
        "title" => $title,
        "discount" => $discount,
        "start_date" => $start_date,
        "end_date" => $end_date,
        "book_ids" => implode(',', $book_ids,),
        "category_ids" => implode(',',  $category_ids),
        "all_books" => $all_books,
      ]);

      ApiHelper::sendJson([
        "success" => $result
      ]);
    } else {

      ApiHelper::sendJson($errors);
    }
  }
}
