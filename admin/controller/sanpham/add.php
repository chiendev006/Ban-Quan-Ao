<?php
include_once './model/sanpham.php';

if (!isset($_POST['addsp'])) {
    include_once './view/sanpham/add.php';
} else {
    $tensp = $_POST['ten_sp'];
    $mausac = $_POST['mau_sac'];
    $kichco = $_POST['kich_co'];
    $gia = $_POST['gia_sp'];
    $img = $_FILES['img'];
    $loai = $_POST['loai'];
    addSanPham($tensp, $mausac, $kichco, $gia,$img,  $loai);
    $script = "<script> 
    alert('Thêm san pham thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}