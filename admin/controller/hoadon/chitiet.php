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
        $hoaDonInfo[$key]['mausac'] = $sanPhamInfo['mau_sac'];
        $hoaDonInfo[$key]['kichco'] = $sanPhamInfo['kich_co'];
        
    }
    include_once "./view/hoadon/chitiet.php";
} $listGioHang = isset($_SESSION['gioHang']) ? $_SESSION['gioHang'] : [];

// Duyệt qua các sản phẩm trong giỏ hàng
foreach ($listGioHang as $key => $item) {
    // Lấy thông tin sản phẩm từ ID trong giỏ hàng
    $sanPhamInfo = getSanPhamById($item['id']);
    
    // Cập nhật thông tin sản phẩm vào giỏ hàng
    $listGioHang[$key]['ten_sp'] = $sanPhamInfo['ten_sp'];
    $listGioHang[$key]['gia_sp'] = $sanPhamInfo['gia_sp'];
    $listGioHang[$key]['img'] = $sanPhamInfo['img'];
    
    // Tính tổng tiền cho từng sản phẩm
    $total += $sanPhamInfo['gia_sp'] * $item['so_luong'];
}

