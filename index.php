<?php
  // Đảm bảo đường dẫn này là đúng

date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    $action = str_replace(".php", "", $action);

    

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
         
        case "thanhtoan":  
            include_once "controller/checkout/add.php";
            break;

        case "hienthithanhtoan":
            include_once "controller/checkout/index.php";
            break; 

        case 'contact':
            include "controller/contact/contactController.php";
            break;
            
        case "deleteCart":
            include_once "controller/cart/delete.php";
            break;

        case "danhmuc":
            include_once "controller/danhmuc/index.php";
            break;                   
    } 
}
 else {
    include_once 'controller/home/index.php';
}