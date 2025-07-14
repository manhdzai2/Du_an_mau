<?php
require_once 'connect.php';
class DanhMuc extends connectDB {
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM danhmuc WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function add($ten_danhmuc) {
        $stmt = $this->conn->prepare("INSERT INTO danhmuc (ten_danhmuc) VALUES (?)");
        return $stmt->execute([$ten_danhmuc]);
    }
    public function update($id, $ten_danhmuc) {
        $stmt = $this->conn->prepare("UPDATE danhmuc SET ten_danhmuc = ? WHERE id = ?");
        return $stmt->execute([$ten_danhmuc, $id]);
    }
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM danhmuc WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?> 