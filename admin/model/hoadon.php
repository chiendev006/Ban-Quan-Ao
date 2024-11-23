<?php
include_once 'pdo.php';
function listhoadon()
{
    $sql = 'select * from hoadon';
    return pdo_query($sql);
}
function getHoaDonById($id)
{
    $sql = "select * from hoadon where id_hoadon = $id";
    return pdo_query_one($sql);
}
function getAllChiTietDonHang($id)
{
    $sql = "select * from chi_tiet_hoa_don where id_hoadon = $id";
    return pdo_query($sql);
}
function updateHoaDon($id, $status)
{
    $sql = "update hoadon set status = $status where id_hoadon = $id";
    pdo_execute($sql);
}

function changeStatus($id, $status)
{
    $sql = "update hoadon set status = '$status' where id_hoadon ='$id'";
    pdo_execute($sql);
}
function changeTrangThai($id, $trangThai)
{
    $sql = "update hoadon set trang_thai_tt = '$trangThai' where id_hoadon ='$id'";
    pdo_execute($sql);
}

?>