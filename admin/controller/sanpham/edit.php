<?php
include_once './model/sanpham.php';
include_once './model/danhmuc.php';

if (!isset($_POST['edit']) && isset($_GET['id'])) {
    $listDanhMuc = listDanhMuc();
    $id = $_GET['id'];
    $sanPhamInfo = getSanPhamById($id);
    include_once './view/sanpham/edit.php';
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fileName = null;
    $gia = $_POST['gia_sp'];
    $hang = $_POST['hang'];
    $mota = $_POST['mo_ta'];
    $idDanhMuc = $_POST['danhmuc'];
    if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['name'] != '') {
        $filePath = 'upload/';
        $fileName = date("Y_m_d_H_i_s") . $_FILES['hinhanh']['name'];
        // Xóa file cũ nếu có. Gợi ý if (file_exist())
        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $filePath . $fileName);
    }
    editSanPham($id, $name, $fileName , $gia , $hang , $mota, $idDanhMuc);
    $script = "<script> 
    alert('Sửa sản phẩm thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}