<?php
require_once '../models/danhmuc.php';
$danhmuc = new DanhMuc();
$action = $_GET['action'] ?? 'list';
if ($action == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $danhmuc->add($_POST['ten_danhmuc']);
    header('Location: danhmuc.php');
    exit;
}
if ($action == 'edit' && isset($_GET['id'])) {
    $dm = $danhmuc->getById($_GET['id']);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $danhmuc->update($_GET['id'], $_POST['ten_danhmuc']);
        header('Location: danhmuc.php');
        exit;
    }
}
if ($action == 'delete' && isset($_GET['id'])) {
    $danhmuc->delete($_GET['id']);
    header('Location: danhmuc.php');
    exit;
}
$list = $danhmuc->getAll();
include '../views/danhmuc/list.php'; 