<?php
include_once 'pdo.php';

function listSanPham()
{
    $sql = 'select * from san_pham';
    return pdo_query($sql);
}

function addSanPham($name, $idDanhMuc, $gia, $hang, $mota, $fileName)
{
    $sql = "insert into san_pham (ten_sp, iddm, gia_sp, hang, mo_ta,
     img) values ('$name', '$idDanhMuc', '$gia', '$hang', '$mota', '$fileName')";
    pdo_execute($sql);
}

function getSanPhamById($id)
{
    $sql = "select * from san_pham where id_sp = $id";
    return pdo_query_one($sql);
}

function editSanPham($id, $name, $fileName, $gia, $hang, $mota, $idDanhMuc)
{
    if ($fileName == null) {
        $sql = "update san_pham set ten_sp = '$name',  gia_sp = '$gia'
        , hang = '$hang', mo_ta = '$mota', iddm = '$idDanhMuc' where id_sp='$id'";
    } else {
        $sql = "update san_pham set ten_sp = '$name',img = '$fileName',  gia_sp = '$gia'
        , hang = '$hang', mo_ta = '$mota', iddm = '$idDanhMuc' where id_sp='$id'";  
    }
    pdo_execute($sql);
}
function changeStatus1($id, $status)
{
    $sql = "update san_pham set status = '$status' where id_sp ='$id'";
    pdo_execute($sql);
}


    

