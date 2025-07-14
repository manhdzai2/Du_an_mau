<?php
require_once '../models/sanpham.php';
$sanpham = new SanPham();
$action = $_GET['action'] ?? 'list';
if ($action == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $sanpham->add($_POST['ten_sanpham'], $_POST['gia'], $_POST['mota'], $_POST['id_danhmuc']);
    header('Location: sanpham.php');
    exit;
}
if ($action == 'edit' && isset($_GET['id'])) {
    $sp = $sanpham->getById($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sanpham->update($_GET['id'], $_POST['ten_sanpham'], $_POST['gia'], $_POST['mota'], $_POST['id_danhmuc']);
        header('Location: sanpham.php');
        exit;
    }
}
if ($action == 'delete' && isset($_GET['id'])) {
    $sanpham->delete($_GET['id']);
    header('Location: sanpham.php');
    exit;
}
if ($action == 'search' && isset($_GET['keyword'])) {
    $list = $sanpham->search($_GET['keyword']);
} else {
    $list = $sanpham->getAll();
}
include '../views/sanpham/list.php'; 