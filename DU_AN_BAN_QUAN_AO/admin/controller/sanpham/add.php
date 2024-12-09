<?php
include_once './model/sanpham.php';
include_once './model/danhmuc.php';

if (!isset($_POST['add'])) {
    $listDanhMuc = listDanhMuc();
    include_once './view/sanpham/add.php';
} else {
    $name = $_POST['name'];
    $idDanhMuc = $_POST['danhmuc'];
    $gia = $_POST['gia_sp'];
    $hang = $_POST['hang'];
    $mota = $_POST['mo_ta'];
    $filePath = 'upload/';
    $fileName = date("Y_m_d_H_i_s") . $_FILES['hinhanh']['name'];
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],$filePath . $fileName);
    addSanPham($name, $idDanhMuc, $gia, $hang, $mota, $fileName);
    $script = "<script> 
    alert('Thêm sản phẩm thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}