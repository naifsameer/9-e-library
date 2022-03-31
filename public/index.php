<?php


use app\config\Router;

use app\controllers\AuthController;
use app\controllers\DashboardController;
use app\controllers\PageController;
use app\controllers\ProductDetailsController;
use app\controllers\ShoppingCartController;
use app\controllers\CategoryController;
use app\controllers\CheckoutController;
use app\controllers\dashboard\CategoryController as DashboardCategoryController;

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
Router::post('/upload_file', [DashboardController::class, 'upload']);


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
  //send back preflight request response
  return "";
}

// categories
Router::get("/api/categories", [DashboardCategoryController::class, 'index']);
Router::post("/api/categories/add", [DashboardCategoryController::class, 'store']);

Router::resolve();
