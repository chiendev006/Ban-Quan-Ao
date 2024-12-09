<?php
// Include models
include_once 'model/danhmuc.php';
include_once 'model/sanpham.php';

if (isset($_GET['iddm'])) {
    $iddm = $_GET['iddm']; // Lấy giá trị id danh mục
    // Tiến hành gọi hàm để lấy sản phẩm
    $sanphamList = getSanPhamByDanhMuc($iddm);
} else {
    echo "Danh mục không hợp lệ";
}

include_once "view/danhmuc/index.php";
?>