<?php
class connectDB {
    public $conn;
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=du_an_mau", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
?> 