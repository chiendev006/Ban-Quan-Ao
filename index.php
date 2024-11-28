<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case "index-shop":
            include_once 'controller/shop/index.php';
            break;  
    } 
}
 else {
    include_once 'controller/home/index.php';
}