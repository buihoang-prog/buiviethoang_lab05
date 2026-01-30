<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            width: 80%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background: #f5f5f5;
        }
    </style>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ Tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>password</th>
    </tr>

    <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['fullname'] ?></td>
            <td><?= $p['student_code']?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['password'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
