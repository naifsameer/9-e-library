<?php

use app\config\Router;

use app\controllers\AuthController;
use app\controllers\DashboardController;
use app\controllers\HomeController;
use app\controllers\ProductDetailsController;
use app\controllers\ShoppingCartController;
use app\controllers\CategoryController;
use app\controllers\CheckoutController;

require_once __DIR__ . '/../vendor/autoload.php';

Router::get('/', [HomeController::class, 'index']);

Router::get('/categories', [CategoryController::class, 'index']);

Router::get('/details', [ProductDetailsController::class, 'index']);

Router::get('/shopping-cart', [ShoppingCartController::class, 'index']);

Router::get('/checkout', [CheckoutController::class, 'index']);

// Auth router
Router::get('/login', [AuthController::class, 'login']);
Router::post('/login', [AuthController::class, 'store']);
Router::get('/logout', [AuthController::class, 'logout']);

// dashboard router
Router::get('/dashboard', [DashboardController::class, 'index']);
Router::post('/upload_file', [DashboardController::class, 'upload']);

Router::resolve();
