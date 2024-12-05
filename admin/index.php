<?php



$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case "index":
            include_once 'controller/dashboard/index.php';
            break;
        case "listdanhmuc":
            include_once 'controller/danhmuc/index.php';
            break;
        case "adddanhmuc":
            include_once 'controller/danhmuc/add.php';
            break;
        case "editdanhmuc":
            include_once 'controller/danhmuc/edit.php';
            break;
        case "deletedanhmuc":
            include_once 'controller/danhmuc/delete.php';
            break;
        case "listsanpham":
            include_once 'controller/sanpham/index.php';
            break;
        case "addsanpham":
            include_once 'controller/sanpham/add.php';
            break;
        case "editsanpham":
            include_once 'controller/sanpham/edit.php';
            break;
        case "deletesanpham":
            include_once 'controller/sanpham/delete.php';
            break;
        case "listtaikhoan":
            include_once 'controller/taikhoan/index.php';
            break;
        case "listhoadon":
            include_once 'controller/hoadon/index.php';
            break;
        case "chitiethoadon":
            include_once 'controller/hoadon/chitiet.php';
         break;
        case 'capnhathoadon':
            include_once "controller/hoadon/capnhat.php";
            break;
            case 'manage_contact':
                
                require_once 'controller/manageContactController/manageContactController.php';
                showContactList();
                break;
    
           
    }
} else {
    include_once 'controller/dashboard/index.php';
}