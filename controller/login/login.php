<?php
include_once "admin/model/taikhoan.php";// Đảm bảo phiên làm việc được khởi tạo

// Kiểm tra nếu có dữ liệu đăng nhập được gửi đi
if (isset($_POST['email']) && isset($_POST['matkhau'])) {
    $email = trim($_POST['email']);
    $matkhau = trim($_POST['matkhau']);
    
    // Gọi hàm xử lý đăng nhập
    $taikhoan = dangNhap($email, $matkhau);
    
    if ($taikhoan) {
        // Lưu thông tin tài khoản vào session và chuyển hướng về trang chính
        $_SESSION['user'] = $taikhoan;
        header('Location: index.php');
        exit();
    } else {
        // Lưu thông báo lỗi vào session
        $_SESSION['error'] = 'Sai tên tài khoản hoặc mật khẩu';
        header('Location: index.php?action=login');
        exit();
    }
}

// Nếu không phải phương thức POST, tải giao diện login
include_once "view/login/login.php";
?>