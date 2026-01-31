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


    public function delete()
    {
        if (!isset($_GET['id'])) {
            die('Thiếu ID');
        }

        $id = $_GET['id'];

        $product= new Product();
        $product->delete($id);

        // Quay về danh sách
        header("Location: index.php?page=product_list");
        exit;
    }

  public function detail()
    {
        if (!isset($_GET['id'])) {
            die('Thiếu ID');
        }

        $id = $_GET['id'];

        $productModel = new Product();
        $product = $productModel->find($id);

        if (!$product) {
            die('Không tìm thấy sản phẩm');
        }

        require __DIR__ . '/../../views/product_detail.php';
    }
   public function create()
    {
    $error = '';
    require __DIR__ . '/../../views/product_add.php';
    }

    public function store()
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('Phương thức không hợp lệ');
    }

    $ten = trim($_POST['ten'] ?? '');
    $gia = trim($_POST['gia'] ?? '');
    $hinhanh = trim($_POST['hinhanh'] ?? '');

    if (empty($ten) || empty($gia) || empty($hinhanh)) {
    $error = 'Vui lòng nhập đầy đủ thông tin';
    require __DIR__ . '/../../views/product_add.php';
    return;
    }

    $productModel = new Product();
    $productModel->insert($ten, $gia, $hinhanh);    

    header("Location: index.php?page=product_list");
    exit;
}

public function edit()
{
    if (!isset($_GET['id'])) {
        die('Thiếu ID');
    }

    $id = $_GET['id'];
    $productModel = new Product();
    $product = $productModel->find($id);

    if (!$product) {
        die('Không tìm thấy sản phẩm');
    }

    $error = '';
    require __DIR__ . '/../../views/product_edit.php';
}

public function update()
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('Method không hợp lệ');
    }

    $id = $_POST['id'] ?? '';
    $ten = $_POST['ten'] ?? '';
    $gia = $_POST['gia'] ?? '';
    $hinhanh = $_POST['hinhanh'] ?? '';

    if (empty($ten) || empty($gia) || empty($hinhanh)) {
        $error = 'Vui lòng nhập đầy đủ thông tin';

        $productModel = new Product();
        $product = $productModel->find($id);

        require __DIR__ . '/../../views/product_edit.php';
        return;
    }

    $productModel = new Product();
    $productModel->update($id, $ten, $gia, $hinhanh);

    header("Location: index.php?page=product_list");
    exit;
}




}
