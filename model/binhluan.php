<?php
include_once "pdo.php";


function addBinhluan($noidung,$taikhoan)
{
    $ngayTao = date('Y-m-d H:i:s');
    $sql = "insert into binh_luan (noi_dung,id_khachhang,ngay_tao) values ('$noidung','$taikhoan','$ngayTao')";
    pdo_execute($sql);
}
?>