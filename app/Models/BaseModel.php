<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $conn;

    public function __construct() {
        $servername = "localhost";
        $database = "buoi2_php";
        $username = "buoi2_php";
        $password = "12345";
        $charset = "utf8mb4";

        try {
            $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối DB: " . $e->getMessage());
        }
    }
}
