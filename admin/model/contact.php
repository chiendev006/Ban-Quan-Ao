<?php
include_once "pdo.php";
function listContact()
{
    $sql = 'select * from contact';
    return pdo_query($sql);
}
?>