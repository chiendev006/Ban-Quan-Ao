<?php
include_once './model/sanpham.php';

if (!isset($_POST['editsp']) && isset($_GET['id'])) {
    $sanphamInfor = getSanphamById($_GET['id']);
    include_once './view/sanpham/edit.php';
} else {
    $id = $_POST['id_sp'];
    $tensp = $_POST['ten_sp'];
    $mausac = $_POST['mau_sac'];
    $kichco = $_POST['kich_co'];
    $gia = $_POST['gia_sp'];
    $img = $_FILES['img'];
    $loai = $_POST['loai'];
    editSanPham($id ,$tensp, $mausac, $kichco, $img, $gia,  $loai);
    $script = "<script> 
    alert('Sua san pham thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}
?>