<?php
session_start();
include_once('model/sanpham.php'); // Bao gồm file chứa hàm getSanPhamById()

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $soLuong = 1;  // Mặc định số lượng là 1

    // Khởi tạo giỏ hàng nếu chưa có
    if (!isset($_SESSION['gioHang'])) {
        $_SESSION['gioHang'] = [];
    }

    // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
    $tonTaiTrongGioHang = false;
    foreach ($_SESSION['gioHang'] as $key => $item) {
        if ($id == $item['id']) {
            $_SESSION['gioHang'][$key]['soLuong'] += 1;
            $tonTaiTrongGioHang = true;
            break;
        }
    }

    if (!$tonTaiTrongGioHang) {
        $_SESSION['gioHang'][] = [
            'id' => $id,
            'soLuong' => $soLuong
        ];
    }

    // Chuyển hướng đến trang giỏ hàng
    echo "<script>window.location = 'index.php?action=listgiohang';</script>";
}
