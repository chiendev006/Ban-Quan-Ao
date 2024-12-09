<?php
include_once('model/sanpham.php');
include_once('model/hoadon.php');
if (isset($_POST['thanhtoan'])) {
    $listGioHang = $_SESSION['gioHang'];
    $tongTien = 0;
    foreach ($listGioHang as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id']);
        $listGioHang[$key]['tenSP'] = $sanPhamInfo['ten_sp'];
        $listGioHang[$key]['gia'] = $sanPhamInfo['gia_sp'];
        $listGioHang[$key]['img'] = $sanPhamInfo['img'];
        $tongTien += $sanPhamInfo['gia_sp'] * $item['so_luong'];
    }

    $hoTen = $_POST['ten'];
    $diaChi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $hinhThuc = $_POST['trang_thai_tt'];
    $tongTien += 20000;
    if (isset($_SESSION['user'])) {
        $idKhachHang = $_SESSION['user']['id_khachhang'];
    } else {
        $script = "<script>
        alert('Vui lòng đăng nhập để đặt hàng');
        window.location = 'index.php';
        </script>";
        echo $script;
        exit();
    }

    $idHoaDon = addHoaDon($idKhachHang, $hinhThuc, 
    $tongTien, $hoTen, $diaChi, $sdt, $email);

    foreach ($listGioHang as $item) {
        addChiTietHoaDon($idHoaDon, $item['id'], $item['gia'], $item['so_luong']);
    }

    unset($_SESSION['gioHang']);
    $script = "<script> 
    alert('Bạn đã đặt hàng thành công');
    window.location = 'index.php';
    </script>";
    echo $script;
}