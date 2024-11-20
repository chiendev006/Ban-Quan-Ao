<?php
include_once 'pdo.php';
function listTaiKhoan()
{
    $sql = 'select * from taikhoan';
    return pdo_query($sql);
}
?>