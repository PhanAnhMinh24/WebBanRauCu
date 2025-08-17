<?php
session_start();
include '../database/connect.php';

// Xử lý thêm danh mục
if (isset($_POST['add_category'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);

    $conn->query("INSERT INTO categories (name, description) VALUES ('$name', '$description')");

    $_SESSION['message'] = "Thêm danh mục thành công!";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Lấy danh sách danh mục
$result = $conn->query("SELECT * FROM categories ORDER BY category_id ASC");
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
        height: 100vh;
        background-color: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
        width: 20%;
        min-width: 280px;
        background-color: #ffffff;
        border-right: 1px solid #ddd;
        padding: 20px;
    }

    .sidebar h2 {
        text-align: center;
        font-size: 20px;
        margin-bottom: 20px;
        color: #333;
    }

    .sidebar a {
        display: block;
        padding: 10px 15px;
        margin: 5px 0;
        text-decoration: none;
        color: #333;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .sidebar a:hover {
        background-color: #e9ecef;
    }

    .sidebar a.active {
        background-color: #007bff;
        color: white;
    }

    /* Main content */
    .main {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
    }

    .main h1 {
        margin-bottom: 15px;
        color: #333;
    }

    .main p {
        line-height: 1.6;
        color: #555;
    }
    </style>
</head>

<body>

    <div class="main">
        <h1>Quản lý Danh mục</h1>

        <!-- Hiển thị thông báo -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success">
            <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']); 
                ?>
        </div>
        <?php endif; ?>


        <form action="" method="POST" class="mb-4 p-3 bg-white border rounded">
            <div class="mb-3">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục..."
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Nhập mô tả..."></textarea>
            </div>
            <button type="submit" name="add_category" class="btn btn-success">Thêm danh mục</button>
        </form>


        <div class="card">
            <div class="card-header bg-primary text-white">Danh sách danh mục</div>
            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['category_id']; ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['description']); ?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>