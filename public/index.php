<?php


use app\config\Router;

use app\controllers\AuthController;
use app\controllers\dashboard\AuthorController;
use app\controllers\DashboardController;
use app\controllers\PageController;

use app\controllers\dashboard\BookController;
use app\controllers\dashboard\CategoryController;
use app\controllers\dashboard\PublisherController;

require_once __DIR__ . '/../vendor/autoload.php';



Router::get('/', [PageController::class, 'index']);
Router::get('/categories', [PageController::class, 'categories']);
Router::get('/checkout', [PageController::class, 'checkout']);
Router::get('/details', [PageController::class, 'productDetails']);
Router::get('/shopping-cart', [PageController::class, 'shoppingCart']);

// Auth router
Router::get('/login', [AuthController::class, 'login']);
Router::post('/login', [AuthController::class, 'store']);
Router::get('/logout', [AuthController::class, 'logout']);

// dashboard router
Router::get('/dashboard', [DashboardController::class, 'index']);
// Router::post('/upload_file', [DashboardController::class, 'upload']);


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
  //send back preflight request response
  return "";
}

// categories
Router::get("/api/categories", [CategoryController::class, 'index']);
Router::post("/api/categories/add", [CategoryController::class, 'store']);

// books
Router::get("/api/books", [BookController::class, 'index']);
Router::post("/api/books/add", [BookController::class, 'store']);


// publishers
Router::get("/api/publishers", [PublisherController::class, 'index']);

// authors
Router::get("/api/authors", [AuthorController::class, 'index']);
Router::post("/api/authors/add", [AuthorController::class, 'store']);

Router::resolve();
