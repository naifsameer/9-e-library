<?php


require __DIR__ . ('/../Database.php');


$db = new \app\Database();

// insert fake data 👀
// users
$db
  ->table("users")
  ->insert([
    "name" => "Naif",
    "email" => "admin@super-blog.com",
    "password" => "admin"
  ])
  ->run();


// categories
$db
  ->table("categories")
  ->insert([
    "name" => "web"
  ])
  ->run();

// posts
$db
  ->table("posts")
  ->insert([
    "title" => "New js framework 😃",
    "image" => "1234.jpg",
    "content" => "Build websites even faster with components on top of Tailwind CSS
    Start developing with an open-source library of over 400+ web components and interactive elements built with the utility classes from Tailwind CSS",
    "author_id" => 1,
    "category_id" => 1,
    "created_at" => date('Y-m-d'),
  ])
  ->run();

$db
  ->table("posts")
  ->insert([
    "title" => "New css framework 🤣",
    "image" => "2345.jpg",
    "content" => "components on top of Tailwind CSS
    Start developing with an open-source library of over 400+ web components and interactive elements built with the utility classes from Tailwind CSS",
    "author_id" => 1,
    "category_id" => 1,
    "created_at" => date('Y-m-d'),
  ])
  ->run();


echo "done";
