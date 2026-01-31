<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function insert($ten, $gia, $hinhanh)
{
    $sql = "INSERT INTO products (ten, gia, hinhanh)
            VALUES (?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([$ten, $gia, $hinhanh]);
}

    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $ten, $gia, $hinhanh)
    {
        $sql = "UPDATE products 
        SET ten = ?, gia = ?, hinhanh = ?
        WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$ten, $gia, $hinhanh, $id]);
    }



}

?>
