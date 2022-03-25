<?php

namespace app\models;

use app\config\Database;
use app\helpers\UtilHelper;

/**
 * Post
 * @package app\models
 */
class Post
{
    private $db;
    public function __construct()
    {
        $db = new Database();

        $this->db = $db->table('posts');
    }

    public function create($title, $content, $image)
    {
        return $this
            ->db->insert([
                "title" => $title,
                "content" => $content,
                "image" => $image
            ])->run();
    }

    public function getPosts()
    {
        return  $this->db->select(
            "posts.postsID",
            "posts.title",
            "posts.image",
            "posts.content",
            "categories.name  AS category"
        )->innerJoin("categories", [
            "posts.postsID", "categories.categoriesID"
        ])->getAll();
    }
}
