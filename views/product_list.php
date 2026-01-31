<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-3">Danh sách sản phẩm</h2>

    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <a href="index.php?page=product_add" class="btn btn-success mb-3">
                            + Thêm sản phẩm
            </a> 
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Gía</th>
                <th>Hình Anh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['ten'] ?></td>
                    <td><?= $p['gia'] ?></td>
                    <td><?= $p['hinhanh'] ?></td>
                    <td>
                        <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="index.php?page=product-delete&id=<?=$p['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</a>
                    </td> 
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
