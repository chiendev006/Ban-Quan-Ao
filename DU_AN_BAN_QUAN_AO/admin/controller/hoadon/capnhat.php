<?php
include_once "./model/hoadon.php";
if (isset($_POST['status']) && isset($_POST['id'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];
    changeStatus($id, $status);
    echo '<script> alert("Cập nhật đơn hàng thành công"); </script>';
    echo '<script> window.location.replace("http://localhost/DU_AN_BAN_QUAN_AO/admin/index.php?action=listhoadon"); </script>';
}

if(isset($_POST['trang_thai_tt']) && isset($_POST['id'])) {
    $trangThai = $_POST['trang_thai_tt'];
    $id = $_POST['id'];
    changeTrangThai($id,$trangThai);
}