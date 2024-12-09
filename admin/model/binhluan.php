<?php
include_once 'pdo.php';

function listBinhluan()
{
    $sql = 'select * from binh_luan';
    return pdo_query($sql);
}