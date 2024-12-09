<?php
include_once 'pdo.php';
function listTaiKhoan()
{
    $sql = 'select * from khach_hang';
    return pdo_query($sql);
}
function dangNhap($email,$matkhau) {
    $sql = "select * from khach_hang where `email` = '$email' AND `matkhau` = '$matkhau'";
    return pdo_query_one($sql);
}
?>