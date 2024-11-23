<?php
include_once "model/danhmuc.php"; // Đảm bảo include đúng vị trí
// Lấy dữ liệu danh mục
$listDanhMuc = listDanhMuc(); 
class danhmuc {
    public  $listDanhMuc = listDanhMuc(); 
}
include_once "view/danhmuc.php"; // Bao gồm giao diện
?>
