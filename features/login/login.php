<?php
include("../database/connect.php");
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
        <form id="loginForm" onsubmit="return validateForm()">
            <input type="text" id="username" placeholder="Tên đăng nhập" />
            <input type="password" id="password" placeholder="Mật khẩu" />
            <div id="errorMsg" class="error"></div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>

</html>