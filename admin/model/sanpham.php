<?php
include_once 'pdo.php';

function listSanPham()
{
    $sql = 'select * from san_pham';
    return pdo_query($sql);
}

function addSanPham($tensp, $mausac, $kichco, $gia, $img, $loai)
{
   
    $sql = "insert into san_pham (ten_sp, mau_sac, kich_co, gia_sp, img, loai) values ('$tensp','$mausac','$kichco','$gia','$img','$loai')";
    pdo_execute($sql);
}
function getSanphamById($id)
{
    $sql = "select * from san_pham where id_sp=$id";
    return pdo_query_one($sql);
}

function editSanPham($id, $tensp, $mausac, $kichco, $img, $gia, $loai)
{   
    $sql = "update san_pham set ten_sp = '$tensp', 
            mau_sac = '$mausac', 
            kich_co = '$kichco', 
            img = '$img', 
            gia_sp = '$gia', 
            loai = '$loai' 
        WHERE id_sp = '$id'";
    pdo_execute($sql);
}
function changeStatus($id, $status)
{
    $sql = "update san_pham set status = '$status' where id_sp ='$id'";
    pdo_execute($sql);
}