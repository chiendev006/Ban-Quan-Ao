<?php
include_once "model/contact.php";
if (!isset($_POST['add'])) {
    include_once './view/contact/index.php';
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $noidung = $_POST['noidung'];
    addContact($name,$email,$noidung);
    $script = "<script> 
    alert('Thêm danh mục thành công!');
    window.location = 'index.php?action=contact';
    </script>";
    echo $script;
}
?>