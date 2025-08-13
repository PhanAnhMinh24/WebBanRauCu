<?php
include("../../database/connect.php");

$error_message = "";
$success_message = "";

$sql = "SELECT full_name, email, phone, address FROM users LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    $error_message = "Không tìm thấy thông tin người dùng.";
}

// Xử lý khi form gửi lên
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $address   = $_POST['address'];

    // UPDATE không cần WHERE users_id
    $update_sql = "UPDATE users SET full_name = ?, email = ?, phone = ?, address = ? LIMIT 1";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssss", $full_name, $email, $phone, $address);

    if ($stmt->execute()) {
        $success_message = "Cập nhật thông tin thành công!";
        // Cập nhật lại dữ liệu để hiển thị
        $user['full_name'] = $full_name;
        $user['email']     = $email;
        $user['phone']     = $phone;
        $user['address']   = $address;
    } else {
        $error_message = "Có lỗi xảy ra khi cập nhật: " . $conn->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin cá nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Cập nhật thông tin cá nhân</h2>

        <?php if ($error_message): ?>
        <div class="alert alert-danger"><?= $error_message ?></div>
        <?php elseif ($success_message): ?>
        <div class="alert alert-success"><?= $success_message ?></div>
        <?php endif; ?>

        <?php if (!empty($user)): ?>
        <div class="card p-4">
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ và tên</label>
                        <input type="text" name="full_name" class="form-control" id="fullName"
                            value="<?= htmlspecialchars($user['full_name']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="<?= htmlspecialchars($user['email']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="phone"
                            value="<?= htmlspecialchars($user['phone']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <textarea name="address" class="form-control" id="address" rows="4"
                            required><?= htmlspecialchars($user['address']) ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>

</html