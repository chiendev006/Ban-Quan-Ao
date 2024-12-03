<?php
include_once "pdo.php";
function addTaikhoan($hoten,$ngaySinh,$email,$matkhau,$sdt,$diachi)
{
    $sql = "insert into khach_hang (ho_ten,ngay_sinh,email,matkhau,sdt,dia_chi) values ('$hoten','$ngaySinh','$email','$matkhau','$sdt','$diachi')";
    pdo_execute($sql);
}
?>