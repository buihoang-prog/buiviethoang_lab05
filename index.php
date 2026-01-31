<?php
// require 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();



// echo "<h2>Fake Data</h2>";
// echo "Tên: " . $faker->name . "<br>";
// echo "Địa chỉ: " . $faker->address . "<br>";
// echo "Email: " . $faker->email . "<br>";

// echo "<br>" ."<h2>gọi class không cần require thủ công</h2> "."<br>";
// use App\Models\Student;
// $sv = new Student();
// echo $sv->getInfo(). "<br>";


use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product_list';
$controller = new ProductController();

switch ($page) {
    case 'product_list':
        $controller->index();
        break;

    case 'product-delete':
        $controller->delete();
        break;

    case 'product-detail':
        $controller->detail();
        break;
    case 'product_add':
        $controller->create();
        break;

    case 'product-store':
        $controller->store();
        break;

    case 'product-edit':
    $controller->edit();
    break;

    case 'product-update':
    $controller->update();
    break;
    
    default:
        echo "404 - Page Not Found";
}
?>