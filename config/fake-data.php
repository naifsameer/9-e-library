<?php

use app\config\Database;

require __DIR__ . ('/Database.php');


$db = Database::getInstance();

// insert fake data 👀
// users
$db
  ->setTable("users")
  ->insert([
    "name" => "Naif",
    "email" => "admin@super-blog.com",
    "password" => "admin"
  ])
  ->run();


// categories
$db
  ->setTable("categories")
  ->insert([
    "name" => "web"
  ])
  ->run();

// products
$db
  ->setTable("products")
  ->insert([
    "title" => "New js framework 😃",
    "image" => "1234.jpg",
    "description" => "Build websites even faster with components on top of Tailwind CSS
    Start developing with an open-source",
    "author_id" => 1,
    "category_id" => 1,
    "created_at" => date('Y-m-d'),
  ])
  ->run();

$db
  ->setTable("products")
  ->insert([
    "title" => "New css framework 🤣",
    "image" => "2345.jpg",
    "description" => "components on top of Tailwind CSS
    Start developing with an open-source",
    "author_id" => 1,
    "category_id" => 1,
    "created_at" => date('Y-m-d'),
  ])
  ->run();


echo "done";
