<?php

namespace app\controllers;

use app\models\Post;
use app\config\Router;

/**
 * Class Post controller
 * @package app\controllers
 */
class PostController
{
    public function index(Router $router)
    {
        // get posts
        $posts = new Post();
        $data = $posts->getPosts();

        $router->render('index', $data);
    }
}
