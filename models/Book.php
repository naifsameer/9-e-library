<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Book extends Model
{

    protected static $table_name = 'books';

    public function __construct()
    {
    }

    public static function getAll()
    {
        $books  = self::table()
            ->select(
                'books.*',
                'categories.name as category',
                'authors.name as author',
                'publishers.name as publisher'
            )
            ->join('categories', ["books.category_id", "categories.id"])
            ->join('authors', ["books.author_id", "authors.id"])
            ->join('publishers', ["books.publisher_id", "publishers.id"])
            ->where('books.is_active', 1)
            ->all();

        return $books;
    }
}
