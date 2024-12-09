<?php
include_once('model/sanpham.php');
if (isset($_SESSION['gioHang']) && $_SESSION['gioHang'] != []) {
    $listGioHang = $_SESSION['gioHang'];
    $tongTien = 0;
    foreach ($listGioHang as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id']);
        $listGioHang[$key]['tenSP'] = $sanPhamInfo['ten_sp'];
        $listGioHang[$key]['gia'] = $sanPhamInfo['gia_sp'];
        $listGioHang[$key]['img'] = $sanPhamInfo['img'];
        $tongTien += $sanPhamInfo['gia_sp'] * $item['so_luong'];
    }
    include_once('view/checkout/index.php');
} else {
    $script = "<script> 
    alert('Giỏ hàng đang trống !!!!!!');
    window.location = 'index.php';
    </script>";
    echo $script;
}