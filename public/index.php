<?php

use app\controllers\AuthController;
use app\controllers\DashboardController;
use app\controllers\HomeController;
use app\config\Router;
use app\controllers\CategoryController;

require_once __DIR__ . '/../vendor/autoload.php';

Router::get('/', [HomeController::class, 'index']);

Router::get('/categories', [CategoryController::class, 'index']);

// Auth router
Router::get('/login', [AuthController::class, 'login']);
Router::post('/login', [AuthController::class, 'store']);
Router::get('/logout', [AuthController::class, 'logout']);

// dashboard router
Router::get('/dashboard', [DashboardController::class, 'index']);

Router::resolve();
