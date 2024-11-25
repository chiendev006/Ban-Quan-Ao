<?php
// Kết nối PDO
require_once 'pdo.php';

// Hàm lấy doanh thu theo ngày
function getDoanhThuNgay($ngay) {
    $doanh_thu_ngay_sql = "SELECT SUM(tong_tien) AS doanh_thu_ngay FROM hoadon WHERE DATE(ngay_lap) = :ngay";
    return pdo_query_value($doanh_thu_ngay_sql, [':ngay' => $ngay]) ?: 0; // Trả về 0 nếu không có dữ liệu
}

// Hàm lấy doanh thu theo tháng
function getDoanhThuThang($thang) {
    $doanh_thu_thang_sql = "SELECT SUM(tong_tien) AS doanh_thu_thang FROM hoadon WHERE DATE_FORMAT(ngay_lap, '%Y-%m') = :thang";
    return pdo_query_value($doanh_thu_thang_sql, [':thang' => $thang]) ?: 0; // Trả về 0 nếu không có dữ liệu
}

// Hàm lấy doanh thu theo năm
function getDoanhThuNam($nam) {
    $doanh_thu_nam_sql = "SELECT SUM(tong_tien) AS doanh_thu_nam FROM hoadon WHERE YEAR(ngay_lap) = :nam";
    return pdo_query_value($doanh_thu_nam_sql, [':nam' => $nam]) ?: 0; // Trả về 0 nếu không có dữ liệu
}

return [
    'doanh_thu_ngay' => getDoanhThuNgay(date('Y-m-d')),
    'doanh_thu_thang' => getDoanhThuThang(date('Y-m')),
    'doanh_thu_nam' => getDoanhThuNam(date('Y')),
];
