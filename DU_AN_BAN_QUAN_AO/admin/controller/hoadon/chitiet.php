<?php
include_once "./model/hoadon.php";
include_once "./model/sanpham.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hoaDonChiTiet = getHoaDonById($id);
    $hoaDonInfo = getAllChiTietDonHang($id);
    foreach($hoaDonInfo as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id_sanpham']);
        $hoaDonInfo[$key]['ten_sp'] = $sanPhamInfo['ten_sp'];
        $hoaDonInfo[$key]['img'] = $sanPhamInfo['img'];
    }
    include_once "./view/hoadon/chitiet.php";
}
