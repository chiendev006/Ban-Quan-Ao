<?php
include_once "admin/model/taikhoan.php";

if (isset($_POST['email']) && isset($_POST['matkhau'])) {
    $taikhoan = dangNhap($_POST['email'],$_POST['matkhau']);
    if ($taikhoan) {
        $_SESSION['user'] = $taikhoan;
        header('Location: index.php');
    }
}  else {
    $_SESSION['error'] = 'Sai tk hoac mk';
}

include_once "view/login/login.php";
?>