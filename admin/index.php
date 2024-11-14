<?php 
    include_once ("model/pdo.php");
    include_once ("model/danhmuc.php");
    include_once ('controller/danhmuc/DanhmucController.php');
    $url = isset($_GET['url']) ? $_GET['url'] : "";
    $index = new DanhmucController();
    $danh_muc = new DanhmucController();
    switch ($url) {
        case 'index':
            $index->index();
            break;
        case "danhmuc":
            $danh_muc->danhmuc();
            break;
        case "listdm":
           $danh_muc->listdm();
            break;
        case "deletedm":
            $danh_muc->deletedm();
            break;
        case "suadm":
            $danh_muc->suadm();
            break;
        case "updatedm":
            $danh_muc->updatedm();
            break;
        default:
            $danh_muc->index();
            break;
    }
?>