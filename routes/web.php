<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Bramus\Router\Router;

$router = new Router;
// --------------------------
// Nơi khai báo các đường dẫn
$router->get('/', function () {
    echo "Đây là trang chủ";
});


// Đường dẫn quản lý sản phẩm
$router->get('/products',               ProductController::class . '@index');
$router->get('/product/show/{id}',      ProductController::class . '@show');
$router->get('/product/create',         ProductController::class . '@create');
$router->post('/product/store',         ProductController::class . '@store');
$router->get('/product/edit/{id}',      ProductController::class . '@edit');
$router->post('/product/update/{id}',   ProductController::class . '@update');
$router->post('/product/destroy/{id}',  ProductController::class . '@destroy');

$router->get('/giaodien', function() {
    return view('products.index');
});

// --------------------------
$router->run();