<?php
// index.php
header("Content-Type: application/json");

require_once 'controllers/UserController.php';
require_once 'routes/api.php';

// Ambil info request
$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Inisialisasi Controller
$userController = new UserController();

// Panggil fungsi routing
handleRouting($path, $method, $userController);