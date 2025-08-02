<?php
session_start();
include("../../database/connect.php");

$error_message = "";

// Chỉ xử lý khi người dùng bấm nút Đăng nhập
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $error_message = "Vui lòng nhập đầy đủ email và mật khẩu.";
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                // Đăng nhập thành công
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['role'] = $user['role'];
                header("Location: ../../../homepage/homepage.php");
                exit();
            } else {
                $error_message = "Mật khẩu không đúng.";
            }
        } else {
            $error_message = "Email không tồn tại.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../login/login.css">
</head>

<body>
    <div class="login-box">
        <h2>Đăng nhập</h2>
        <?php if (!empty($error_message)): ?>
        <div class="error" style="color: red; margin-bottom: 10px;">
            <?= htmlspecialchars($error_message) ?>
        </div>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Mật khẩu" />
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>

</html>