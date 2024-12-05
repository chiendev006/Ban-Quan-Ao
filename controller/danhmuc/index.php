<?php 
include_once('model/sanpham.php');
include_once('model/danhmuc.php');

function sanpham() {
    $id_danh_muc = isset($_GET['id_danh_muc']) ? $_GET['id_danh_muc'] : null;

    // Lấy danh sách danh mục
    $listDanhMuc = listDanhMuc();

    if ($id_danh_muc) {
        // Lấy sản phẩm theo danh mục
        $listSanPham = getProductsByCategoryId($id_danh_muc);
    } else {
        // Lấy toàn bộ sản phẩm nếu không chọn danh mục
        $listSanPham = listSanPham();
    }

    include('./view/sanpham/index.php');
}

?>
if (isset($_POST['listgo']) && ($_POST['listgo'])) {
    $name_danh_muc = $_POST['name_danh_muc'];
    $iddm = $_POST['iddm'];
} else {
    $name_danh_muc = '';
    $iddm = 0;
}
$listdanhsach = loadall_danhmuc();
$listsanpham = loadall_sanpham($kyw, $iddm);
include_once "view/layout/header.php";
