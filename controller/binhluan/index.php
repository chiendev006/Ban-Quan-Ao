<?php
include_once 'model/binhluan.php';

if (!isset($_POST['add'])) {
    include_once './view/detail/detail.php';
} else {
    $taikhoan = $_POST['id_khachhang'];
    $noidung = $_POST['noi_dung'];
    addBinhluan($noidung, $taikhoan);
    $script = "<script> 
    alert('Thêm danh mục thành công!');
    window.location = 'index.php?action=index.php';
    </script>";
    echo $script;
}