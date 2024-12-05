<?php
session_start();  // Bắt đầu session
include_once('model/sanpham.php'); // Bao gồm model sản phẩm

if (isset($_SESSION['gioHang'])) {
    $listGioHang = $_SESSION['gioHang'];
    $tongTien = 0;

    foreach ($listGioHang as $key => $item) {
        if (!isset($item['soLuong'])) {
            $item['soLuong'] = 1;
        }

        $sanPhamInfo = getSanPhamById($item['id']); // Gọi hàm để lấy thông tin sản phẩm
        if ($sanPhamInfo) {
            $listGioHang[$key]['ten_sp'] = $sanPhamInfo['ten_sp'];
            $listGioHang[$key]['gia'] = $sanPhamInfo['gia_sp'];
            $listGioHang[$key]['hinhanh'] = $sanPhamInfo['img'];
            $tongTien += $sanPhamInfo['gia_sp'] * $item['soLuong'];
        }
    }

    include_once('view/checkout/index.php'); // Hiển thị giao diện giỏ hàng
} else {
    echo "<script>
        alert('Giỏ hàng đang trống !!!!!!');
        window.location = 'index.php';
    </script>";
}
