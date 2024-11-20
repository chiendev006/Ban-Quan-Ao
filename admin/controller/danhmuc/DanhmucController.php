<?php
class DanhmucController {
    public function index() {
    include_once("views/dashboard/index.php");
    }
    public function danhmuc() {
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $tenloai = $_POST['name_danh_muc'];
            insert_danhsach($tenloai);
            $thongbao = "Them thanh cong";
        }
        include_once "views/danhmuc/add.php";
    }
    public function listdm() {
        $danh_muc = loadall_danhmuc();
        include_once "views/danhmuc/list.php";
    }
    public function deletedm() {
        if (isset($_GET['id_danh_muc']) && filter_var($_GET['id_danh_muc'], FILTER_VALIDATE_INT)) {
            $id = intval($_GET['id_danh_muc']);
            delete_danhmuc($id);
        }
        $danh_muc = loadall_danhmuc();
        include_once "views/danhmuc/list.php";
    }
    public function suadm() {
        if (isset($_GET['id_danh_muc']) && ($_GET['id_danh_muc'] > 0)) {
            $ds = loadone_danhmuc($_GET['id_danh_muc']);
        }
        include_once "views/danhmuc/update.php";
    }
    public function updatedm() {
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $tenloai = $_POST['name_danh_muc'];
            $id = $_POST['id_danh_muc'];
            update_danhmuc($id, $tenloai);
            $thongbao = "Cap nhat thanh cong";
        }
        $danh_muc = loadall_danhmuc();
        include_once "views/danhmuc/list.php";  
    }
    
}
?>