<?php
$page = $_GET['page'] ?? 'home';
switch ($page) {
    case 'danhmuc':
        require 'controllers/danhmuc.php';
        break;
    case 'sanpham':
        require 'controllers/sanpham.php';
        break;
    default:
        require 'views/home.php';
        break;
}
?> 