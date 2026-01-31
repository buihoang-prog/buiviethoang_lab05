<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $conn;

    public function __construct() {

        $servername = $_ENV['DB_HOST'];
        $database   = $_ENV['DB_NAME'];
        $username   = $_ENV['DB_USER'];
        $password   = $_ENV['DB_PASS'];
        $charset    = $_ENV['DB_CHARSET'];

        try {
            $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối DB: " . $e->getMessage());
        }
    }
}
