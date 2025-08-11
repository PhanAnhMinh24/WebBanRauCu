<?php
include '../database/connect.php';
$error_message = '';

// Truy vấn lấy thông tin người dùng
$sql = "SELECT full_name, email, phone, address FROM users LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Lấy thông tin người dùng
    $user = $result->fetch_assoc(); // Nếu có số lượng người thì sẽ lấy thông tin rồi hiển thị lên giao diện
} else {
    $error_message = 'Không tìm thấy thông tin người dùng.';
}

$conn->close(); // Đóng kết nối cơ sở dữ liệu
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Thông tin cá nhân</h2>
        <?php if ($error_message): ?>
        <div class="alert alert-dager"> <?= $error_message ?></div>
        <?php else: ?>
        <div class="card p-4">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ tên đầy đủ</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Họ tên đầy đủ" readonly
                            value="<?= htmlspecialchars($user['full_name']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" readonly
                            value="<?= htmlspecialchars($user['email'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">SĐT</label>
                        <input type="text" class="form-control" id="phone" placeholder="SĐT" readonly
                            value="<?= htmlspecialchars($user['phone'])?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="Địa chỉ" readonly
                            value="<?= htmlspecialchars($user['address'])?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endif; ?>
</body>

</html>