<?php
include_once "pdo.php";
function addContact($name,$email,$noidung)
{
    $sql = "insert into contact (name,email,noidung) values ('$name','$email','$noidung')";
    pdo_execute($sql);
}
?>