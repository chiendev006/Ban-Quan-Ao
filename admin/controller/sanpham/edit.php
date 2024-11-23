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
    $idDanhMuc = $_POST['danhmuc'];
    $mauSac = $_POST['mausac'];
    $kichCo = $_POST['kichco'];
    $gia = $_POST['gia'];
    $chatLieu = $_POST['loai'];
    $fileName = null;
    if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['name'] != '') {
        $filePath = 'upload/';
        $fileName = date("Y_m_d_H_i_s") . $_FILES['hinhanh']['name'];
        // Xóa file cũ nếu có. Gợi ý if (file_exist())
        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $filePath . $fileName);
    }
    var_dump($chatLieu);
    editSanPham($id, $name, $idDanhMuc, $mauSac, $kichCo, $gia, $chatLieu, $fileName);
    $script = "<script> 
    alert('Sửa sản phẩm thành công!');
    window.location = 'index.php?action=listsanpham';
    </script>";
    echo $script;
}