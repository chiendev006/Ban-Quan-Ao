<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case "index-shop":
            include_once 'controller/shop/index.php';
            break;
        case "themgiohang" :
            include_once "controller/cart/add.php" ;
            break;
        case "listgiohang" :
            include_once "controller/cart/index.php" ;
            break;
            case 'hienthithanhtoan':
                include_once 'controller/checkout/index.php';
                break;
            case 'thanhtoan':
                include_once 'controller/checkout/add.php';
                break;
                case 'login':
                    include_once 'controller/login/login.php';
                    break;
                    case 'dangki':
                        include_once 'controller/login/dangki.php';
                        break;
                        case 'contact':
                            include_once 'controller/contact/contact.php';
                            break;
    } 
}
 else {
    include_once 'controller/home/index.php';
}