<?php
include_once "model/danhmuc.php";
include_once 'model/sanpham.php';
$listDanhMuc = listDanhMuc();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $xem_Sp = getSanPhamById($id);

    include_once "view/layout/header.php";
    include_once($_SERVER['DOCUMENT_ROOT'] . '/DU_AN_BAN_QUAN_AO/view/detail/detail.php');
    include_once "view/layout/footer.php";
}
