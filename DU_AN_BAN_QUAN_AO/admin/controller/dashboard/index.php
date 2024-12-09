<?php

require_once 'model/dashboard.php';


$ngay = isset($_GET['ngay']) ? $_GET['ngay'] : null;
$thang = isset($_GET['thang']) ? $_GET['thang'] : null;
$nam = isset($_GET['nam']) ? $_GET['nam'] : null;


if ($ngay) {

    $doanh_thu_ngay = getDoanhThuNgay($ngay);
} else {
  
    $doanh_thu_ngay = getDoanhThuNgay(date('Y-m-d'));
}

if ($thang) {

    $doanh_thu_thang = getDoanhThuThang($thang);
} else {

    $doanh_thu_thang = getDoanhThuThang(date('Y-m'));
}

if ($nam) {

    $doanh_thu_nam = getDoanhThuNam($nam);
} else {

    $doanh_thu_nam = getDoanhThuNam(date('Y'));
}


require_once 'view/dashboard/index.php';;