<?php

namespace app\models;

/**
 * @package app\models
 */
class Offer extends Model
{
    protected static $table_name = 'offers';

    // public static function getAll()
    // {
    //     $books  = self::table()
    //         ->select(
    //             'offers.*',
    //             'categories.name as category',
    //             'authors.name as author',
    //             'publishers.name as publisher'
    //         )
    //         ->join('categories', ["books.category_id", "categories.id"])
    //         ->join('authors', ["books.author_id", "authors.id"])
    //         ->join('publishers', ["books.publisher_id", "publishers.id"])
    //         ->where('books.is_active', 1)
    //         ->all();

    //     return $books;
    // }
}
