<?php

use app\controllers\AuthController;
use app\controllers\DashboardController;
use app\controllers\HomeController;
use app\Router;


require_once __DIR__ . '/../vendor/autoload.php';

Router::get('/', [HomeController::class, 'index']);

Router::get('/login', [AuthController::class, 'login']);
Router::post('/login', [AuthController::class, 'store']);
Router::get('/logout', [AuthController::class, 'logout']);


Router::get('/dashboard', [DashboardController::class, 'index']);

Router::resolve();
