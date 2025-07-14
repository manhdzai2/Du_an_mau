<?php
require_once 'connect.php';
class SanPham extends connectDB {
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM sanpham");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM sanpham WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function add($ten_sanpham, $gia, $mota, $id_danhmuc) {
        $stmt = $this->conn->prepare("INSERT INTO sanpham (ten_sanpham, gia, mota, id_danhmuc) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$ten_sanpham, $gia, $mota, $id_danhmuc]);
    }
    public function update($id, $ten_sanpham, $gia, $mota, $id_danhmuc) {
        $stmt = $this->conn->prepare("UPDATE sanpham SET ten_sanpham = ?, gia = ?, mota = ?, id_danhmuc = ? WHERE id = ?");
        return $stmt->execute([$ten_sanpham, $gia, $mota, $id_danhmuc, $id]);
    }
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM sanpham WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public function search($keyword) {
        $stmt = $this->conn->prepare("SELECT * FROM sanpham WHERE ten_sanpham LIKE ?");
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll();
    }
}
?> 