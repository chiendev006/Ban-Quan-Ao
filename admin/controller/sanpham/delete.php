<?php
include_once './model/sanpham.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    changeStatus1($id, $status);

    if ($status == 1) {
        $script = "<script> 
        alert('Hiện danh mục thành công!');
        window.location = 'index.php?action=listsanpham';
        </script>";
    } else {
        $script = "<script> 
        alert('Ẩn danh mục thành công!');
        window.location = 'index.php?action=listsanpham';
        </script>";
    }
    echo $script;
}