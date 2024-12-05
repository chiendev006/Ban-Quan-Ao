<?php
include_once('model/sanpham.php');
include_once('model/hoadon.php');

if (isset($_POST['thanhtoan'])) {
    session_start(); // Khởi tạo session nếu chưa
    $listGioHang = $_SESSION['gioHang'];
    $tongTien = 0;

    // Lấy thông tin các sản phẩm trong giỏ hàng
    foreach ($listGioHang as $key => $item) {
        $sanPhamInfo = getSanPhamById($item['id']);
        $listGioHang[$key]['tenSP'] = $sanPhamInfo['ten_sp'];
        $listGioHang[$key]['gia'] = $sanPhamInfo['gia_sp'];
        $listGioHang[$key]['hinhanh'] = $sanPhamInfo['img'];
        $tongTien += $sanPhamInfo['gia_sp'] * $item['soLuong'];
    }

    // Lấy thông tin thanh toán từ form
    $hoTen = $_POST['ten'];
    $diaChi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $status = $_POST['hinhthuc']; // Trường này sẽ nhận giá trị 0 hoặc 1 từ form

    // Thêm phí vận chuyển
    $tongTien += 20000;

    // Nếu có khách hàng đang đăng nhập thì lấy ID khách hàng
   // Kiểm tra xem khách hàng đã đăng nhập chưa
 // Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION['user'])) {
    $idKhachHang = $_SESSION['user']['id']; // Lấy id_khachhang từ session
} else {
    // Nếu chưa đăng nhập, tạo khách hàng tạm thời và lấy id của khách hàng này
   $idKhachHang= NULL;
}

// Gọi hàm thêm hóa đơn
$idHoaDon = addHoaDon($idKhachHang, $status, $tongTien, $hoTen, $diaChi, $sdt, $email);




    // Thêm chi tiết hóa đơn vào cơ sở dữ liệu
    foreach ($listGioHang as $item) {
        addChiTietHoaDon($idHoaDon, $item['id'], $item['gia'], $item['soLuong']);
    }

    // Xóa giỏ hàng sau khi đặt hàng
    unset($_SESSION['gioHang']);

    // Hiển thị thông báo và chuyển hướng
    echo "<script>
    alert('Bạn đã đặt hàng thành công');
    window.location = 'index.php';
    </script>";
}
