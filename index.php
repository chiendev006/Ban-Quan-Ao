<?php

include_once ('view/home/index.php');

if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch ($action) {
        case "listdanhmuc":
            include_once 'Controller/danhmuc/index.php';
            break;
    }
} else {

}
?>