<?php
include("../database/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Kiểm tra email đã tồn tại chưa
    $check_query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email đã được sử dụng. Vui lòng nhập email khác.');</script>";
    } else {
        // Thêm người dùng
        $insert_query = "INSERT INTO users(full_name, email, password, phone, address) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssss", $full_name, $email,  $hashed_password, $phone, $address);


        if ($stmt->execute()) {
            echo "<script>alert('Đăng ký thành công.'); window.location.href='../login/login.php';</script>";
        } else {
            echo "<script>alert('Đăng ký thất bại');</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="dk.css">
</head>

<body>
    <div class="form-container">
        <h2>Đăng ký tài khoản</h2>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" id="fullname" name="full_name" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Địa chỉ Email">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <input type="tel" id="phone" name="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input type="text" name="address" id="address" placeholder="Địa chỉ"></input>
            </div>
            <button type="submit">Đăng ký</button>
            <div class="form-footer">
                Đã có tài khoản? <a href="../database/login.php">Đăng nhập</a>
            </div>
        </form>

    </div>
</body>

</html>