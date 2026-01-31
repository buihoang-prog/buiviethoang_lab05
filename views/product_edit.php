<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">✏️ Sửa sản phẩm</h4>
                </div>

                <div class="card-body">

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>

                    <form action="index.php?page=product-update" method="POST">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" name="ten" class="form-control"
                                   value="<?= $product['ten'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Giá (VNĐ)</label>
                            <input type="number" name="gia" class="form-control"
                                   value="<?= $product['gia'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Link hình ảnh</label>
                            <input type="text" name="hinhanh" class="form-control"
                                   value="<?= $product['hinhanh'] ?>">

                            <div class="mt-2">
                                <img src="<?= $product['hinhanh'] ?>"
                                     width="120"
                                     class="img-thumbnail"
                                     onerror="this.src='https://via.placeholder.com/120'">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-warning">
                                🔄 Cập nhật
                            </button>

                            <a href="index.php?page=product_list" class="btn btn-secondary">
                                ⬅ Quay lại
                            </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
