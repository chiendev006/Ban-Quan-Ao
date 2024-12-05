<?php
include_once "./model/contact.php";
include_once('model/danhmuc.php');
$listDanhMuc= listDanhMuc();

// Hàm để lưu thông tin form liên hệ vào cơ sở dữ liệu


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Kiểm tra dữ liệu hợp lệ
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = "Vui lòng điền đầy đủ thông tin.";
    } else {
        try {
            // Lưu thông tin liên hệ vào cơ sở dữ liệu
            saveContact($name, $email, $subject, $message);
            
            // Gửi thông báo thành công
            $success = "Liên hệ của bạn đã được gửi thành công!";
            
            // Redirect lại trang hiện tại để ngừng việc gửi lại form
            header("Location: " . $_SERVER['PHP_SELF']); // Chuyển hướng lại trang hiện tại
            exit(); // Dừng việc thực thi mã tiếp theo
        } catch (PDOException $e) {
            $error = "Có lỗi xảy ra khi gửi liên hệ: " . $e->getMessage();
        }
    }
}



include_once "./view/contact/index.php";