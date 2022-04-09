<?php


use app\config\Router;

use app\controllers\AuthController;
use app\controllers\dashboard\AuthorController;
use app\controllers\DashboardController;
use app\controllers\PageController;

use app\controllers\dashboard\BookController;
use app\controllers\dashboard\CategoryController;
use app\controllers\dashboard\CityController;
use app\controllers\dashboard\OfferController;
use app\controllers\dashboard\PaymentController;
use app\controllers\dashboard\PaymentMethodController;
use app\controllers\dashboard\PublisherController;
use app\controllers\dashboard\RoleController;
use app\controllers\dashboard\UserController;

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
Router::get("/api/categories/show", [CategoryController::class, 'show']);
Router::post("/api/categories/add", [CategoryController::class, 'store']);

// books
Router::get("/api/books", [BookController::class, 'index']);
Router::get("/api/books/show", [BookController::class, 'show']);
Router::post("/api/books/add", [BookController::class, 'store']);



// publishers
Router::get("/api/publishers", [PublisherController::class, 'index']);
Router::post("/api/publishers/add", [PublisherController::class, 'store']);

// authors
Router::get("/api/authors", [AuthorController::class, 'index']);
Router::post("/api/authors/add", [AuthorController::class, 'store']);

// users
Router::get("/api/users", [UserController::class, 'index']);
Router::post("/api/users/add", [UserController::class, 'store']);

// cities
Router::get("/api/cities", [CityController::class, 'index']);
Router::post("/api/cities/add", [CityController::class, 'store']);

// offers
Router::get("/api/offers", [OfferController::class, 'index']);
Router::post("/api/offers/add", [OfferController::class, 'store']);

// payments
Router::get("/api/payments", [PaymentController::class, 'index']);

// roles
Router::get("/api/roles", [RoleController::class, 'index']);

Router::get("/api/user-payment-methods", [PaymentMethodController::class, 'index']);
Router::get("/api/user-payment-methods/show", [PaymentMethodController::class, 'show']);
Router::post("/api/user-payment-methods/add", [PaymentMethodController::class, 'store']);

Router::resolve();