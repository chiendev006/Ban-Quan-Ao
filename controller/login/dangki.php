<?php
include_once './model/login.php';

if (!isset($_POST['add'])) {
    include_once './view/login/dangki.php';
} else {
    $hoten = $_POST['ho_ten'];
    $ngaySinh = $_POST['ngay_sinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['dia_chi'];
    addTaikhoan($hoten,$ngaySinh,$email,$matkhau,$sdt,$diachi);
    $script = "<script> 
    alert('Đăng kí thành công!');
    window.location = 'index.php?action=login';
    </script>";
    echo $script;
}