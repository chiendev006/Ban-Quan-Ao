<?php
include_once('model/sanpham.php');
include_once('model/danhmuc.php');
$listDanhMuc = listDanhMuc();
$listGioHang = $_SESSION['gioHang'];
$tongTien = 0;
foreach($listGioHang as $key => $item) {
    $sanPhamInfo = getSanPhamById($item['id']);
    $listGioHang[$key]['ten_sp'] = $sanPhamInfo['ten_sp'];
    $listGioHang[$key]['gia_sp'] = $sanPhamInfo['gia_sp'];
    $listGioHang[$key]['img'] = $sanPhamInfo['img'];
    $tongTien += $sanPhamInfo['gia_sp'] * $item['so_luong'];
}
include_once('view/cart/index.php');