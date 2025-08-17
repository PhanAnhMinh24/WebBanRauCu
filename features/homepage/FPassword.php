
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đổi mật khẩu</title>
        <link rel="stylesheet" href="FPassword.css">
    </head>
    <body>
        <div class="Forgot-Password">
            <!-- Menu bên trái -->
            <nav class="FPassword-left">
                <h1>Trang tài khoản</h1>
                <ul class="FPassword-menu">
                    <li class="FPassword-item">
                        <a href="#" class="FPassword-link">Thông tin tài khoản</a><br>
                        <a href="#" class="FPassword-link">Đơn hàng của bạn</a><br>
                        <a href="#" class="FPassword-link">Đổi mật khẩu</a><br>
                        <a href="#" class="FPassword-link">Số địa chỉ</a><br>
                    </li>
                </ul>
            </nav>

            <!-- Nội dung bên phải -->
            <div class="FPassword-right">
                <h2>Đổi mật khẩu</h2>
                <h3>Để đảm bảo tính bảo mật, vui lòng đặt mật khẩu với ít nhất 8 kí tự</h3>
                        <div class="fp-1">
                            <label for="oldpassword" class="form-label">Mật khẩu cũ</label>
                            <input type="password" name="old_password" class="form-control" id="oldpassword" required>
                        </div>
                        <div class="fp-1">
                            <label for="newpassword" class="form-label">Mật khẩu mới</label>
                            <input type="password" name="new_password" class="form-control" id="newpassword" required>
                        </div>
                        <div class="fp-1">
                            <label for="confirmpassword" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" name="confirm_password" class="form-control" id="confirmpassword" required>
                        </div>
                        <button type="submit" class="btn-primary">Cập nhật mật khẩu</button>
                    </form>
            </div>
        </div>
    </body>
    </html>
