<?php

require_once __DIR__ . '/../library/Router.php';
require_once __DIR__ . '/../app/Controller/HomeController.php';
require_once __DIR__ . '/../app/Controller/AuthController.php';
require_once __DIR__ . '/../app/Controller/KategoriController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

session_start();
Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/login', HomeController::class, 'login', []);
Router::add('GET', '/detail/([0-9]*)', HomeController::class, 'detailProduk', []);
Router::add('GET', '/search/([a-zA-Z]*)', HomeController::class, 'searchPage', []);
Router::add('GET', '/search/([a-zA-Z]*)', HomeController::class, 'searchPage', []);
Router::add('GET', '/admin/login', AuthController::class, 'login', []);
Router::add('POST', '/admin/login', AuthController::class, 'postLogin', []);
Router::add('GET', '/admin', KategoriController::class, 'index', [AuthMiddleware::class]);
Router::add('GET', '/admin/kategori', KategoriController::class, 'index', [AuthMiddleware::class]);
Router::add('POST', '/admin/kategori/add', KategoriController::class, 'postAdd', [AuthMiddleware::class]);
Router::add('GET', '/admin/kategori/delete/([a-zA-z]*)', KategoriController::class, 'deleteKategori', [AuthMiddleware::class]);
Router::add('GET', '/admin/produk', KategoriController::class, 'produk', [AuthMiddleware::class]);
Router::add('GET', '/admin/produk/tambah', KategoriController::class, 'tambah', [AuthMiddleware::class]);
Router::run();
Router::add('GET', '/admin/produk/next', KategoriController::class, 'next', [AuthMiddleware::class]);
Router::run();
