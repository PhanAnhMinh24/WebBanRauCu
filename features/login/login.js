function validateForm() {
    const user = document.getElementById('username').value.trim();
    const pass = document.getElementById('password').value.trim();
    const errorMsg = document.getElementById('errorMsg');

    if (!user || !pass) {
        errorMsg.textContent = 'Vui lòng nhập đầy đủ thông tin.';
        return false;
    }

    // Sau này bạn có thể gửi dữ liệu này bằng fetch/ajax hoặc post về PHP xử lý
    errorMsg.textContent = '';
    alert('Đăng nhập thành công (giả lập)');
    return false; // Ngăn gửi form thật
}