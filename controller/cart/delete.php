<?php
session_start(); // Bắt đầu session

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Kiểm tra nếu giỏ hàng đã tồn tại
    if (isset($_SESSION['gioHang'])) {
        foreach ($_SESSION['gioHang'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['gioHang'][$key]); // Xóa sản phẩm khỏi giỏ hàng
                break;
            }
        }
        // Cập nhật lại chỉ mục mảng sau khi xóa
        $_SESSION['gioHang'] = array_values($_SESSION['gioHang']);
    }
}

// Quay lại trang giỏ hàng
header("Location: index.php?action=listgiohang");
exit;
