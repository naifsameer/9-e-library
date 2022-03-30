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

    // public static function getBook()
    // {
    //     $categories  = self::table('books')
    //         ->select()
    //         ->all();


    //     return $categories;
    // }


    // public function create($title, $content, $image)
    // {
    //     return $this
    //         ->db->insert([
    //             "title" => $title,
    //             "content" => $content,
    //             "image" => $image
    //         ])->run();
    // }

    // public function getPosts()
    // {
    //     return  $this->db->select(
    //         "posts.postsID",
    //         "posts.title",
    //         "posts.image",
    //         "posts.content",
    //         "categories.name  AS category"
    //     )->innerJoin("categories", [
    //         "posts.postsID", "categories.categoriesID"
    //     ])->all();
    // }
}
