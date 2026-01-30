<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "<h2>Fake Data</h2>";
echo "Tên: " . $faker->name . "<br>";
echo "Địa chỉ: " . $faker->address . "<br>";
echo "Email: " . $faker->email . "<br>";

echo "<br>" ."gọi class không cần require thủ công "."<br>";
use App\Models\Student;
$sv = new Student();
echo $sv->getInfo(). "<br>";


use App\Controllers\HomeController;

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new HomeController();
    $controller->index();
} else {
    echo "404 - Page Not Found";
}

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'products';

if ($page === 'products') {
    $controller = new ProductController();
    $controller->index();
} else {
    echo "404 - Page Not Found";
}
?>