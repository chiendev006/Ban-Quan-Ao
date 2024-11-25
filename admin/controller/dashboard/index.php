<?php
// Gọi model để lấy dữ liệu
// Gọi model để lấy dữ liệu
require_once 'model/dashboard.php';

// Lấy tham số ngày, tháng, năm từ GET
$ngay = isset($_GET['ngay']) ? $_GET['ngay'] : null;
$thang = isset($_GET['thang']) ? $_GET['thang'] : null;
$nam = isset($_GET['nam']) ? $_GET['nam'] : null;

// Lấy doanh thu
if ($ngay) {
    // Nếu có ngày thì lấy doanh thu theo ngày
    $doanh_thu_ngay = getDoanhThuNgay($ngay);
} else {
    // Nếu không có ngày thì lấy doanh thu hôm nay
    $doanh_thu_ngay = getDoanhThuNgay(date('Y-m-d'));
}

if ($thang) {
    // Nếu có tháng thì lấy doanh thu theo tháng
    $doanh_thu_thang = getDoanhThuThang($thang);
} else {
    // Nếu không có tháng thì lấy doanh thu tháng này
    $doanh_thu_thang = getDoanhThuThang(date('Y-m'));
}

if ($nam) {
    // Nếu có năm thì lấy doanh thu theo năm
    $doanh_thu_nam = getDoanhThuNam($nam);
} else {
    // Nếu không có năm thì lấy doanh thu năm nay
    $doanh_thu_nam = getDoanhThuNam(date('Y'));
}

// Hiển thị vào View
require_once 'view/dashboard/index.php';


