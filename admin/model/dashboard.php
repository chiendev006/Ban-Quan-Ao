<?php

require_once 'pdo.php';


function getDoanhThuNgay($ngay) {
    $doanh_thu_ngay_sql = "SELECT SUM(tongtien) AS doanh_thu_ngay 
                           FROM hoadon 
                           WHERE DATE(ngay_lap) = :ngay AND status = 1"; // Thêm điều kiện status
    return pdo_query_value($doanh_thu_ngay_sql, [':ngay' => $ngay]) ?: 0; 
}



function getDoanhThuThang($thang) {
    $doanh_thu_thang_sql = "SELECT SUM(tongtien) AS doanh_thu_thang 
                            FROM hoadon 
                            WHERE DATE_FORMAT(ngay_lap, '%Y-%m') = :thang AND status = 1"; // Thêm điều kiện status
    return pdo_query_value($doanh_thu_thang_sql, [':thang' => $thang]) ?: 0; 
}



function getDoanhThuNam($nam) {
    $doanh_thu_nam_sql = "SELECT SUM(tongtien) AS doanh_thu_nam 
                          FROM hoadon 
                          WHERE YEAR(ngay_lap) = :nam AND status = 1"; // Thêm điều kiện status
    return pdo_query_value($doanh_thu_nam_sql, [':nam' => $nam]) ?: 0; 
}

return [
    'doanh_thu_ngay' => getDoanhThuNgay(date('Y-m-d')),
    'doanh_thu_thang' => getDoanhThuThang(date('Y-m')),
    'doanh_thu_nam' => getDoanhThuNam(date('Y')),
];