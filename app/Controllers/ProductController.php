<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        // Gọi Model
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // Trả về View
        require __DIR__ . '/../../views/product_list.php';
    }
}
