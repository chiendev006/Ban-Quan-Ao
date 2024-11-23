<?php
include_once 'pdo.php';

function listSanPham()
{
    $sql = 'select * from san_pham';
    return pdo_query($sql);
}

function addSanPham($name, $idDanhMuc, $mauSac, $kichCo, $gia, $chatlieu, $fileName)
{
    $sql = "insert into san_pham (ten_sp, iddm, mau_sac, kich_co, gia_sp, loai,
     img) values ('$name', '$idDanhMuc', '$mauSac', '$kichCo', '$gia', '$chatlieu', '$fileName')";
    pdo_execute($sql);
}

function getSanPhamById($id)
{
    $sql = "select * from san_pham where id_sp = $id";
    return pdo_query_one($sql);
}

function editSanPham($id, $name, $idDanhMuc, $mauSac, $kichCo, $gia, $chatlieu, $fileName)
{
    if ($fileName == null) {
        $sql = "update san_pham set ten_sp = '$name', iddm = '$idDanhMuc', mau_sac = '$mauSac'
        , kich_co = '$kichCo', gia_sp = '$gia', loai = '$chatlieu' where id_sp='$id'";
    } else {
        $sql = "update san_pham set ten_sp = '$name', iddm = '$idDanhMuc', mau_sac = '$mauSac'
        , kich_co = '$kichCo', gia_sp = '$gia', loai = '$chatlieu', img = '$fileName' where id_sp='$id'";
    }
    pdo_execute($sql);
}
function changeStatus1($id, $status)
{
    $sql = "update san_pham set status = '$status' where id_sp ='$id'";
    pdo_execute($sql);
}


    

