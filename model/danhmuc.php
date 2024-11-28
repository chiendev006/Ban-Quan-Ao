<?php
include_once 'pdo.php';

function listDanhMuc()
{
    $sql = 'select * from danh_muc';
    return pdo_query($sql);
}

function addDanhMuc($name)
{
    $sql = "insert into danh_muc (name_danh_muc) values ('$name')";
    pdo_execute($sql);
}

function getDanhMucById($id)
{
    $sql = "select * from danh_muc where id_danh_muc=$id";
    return pdo_query_one($sql);
}

function editDanhMuc($id, $name)
{
    $sql = "update danh_muc set name_danh_muc = '$name' where id_danh_muc='$id'";
    pdo_execute($sql);
}

function changeStatus($id, $status)
{
    $sql = "update danh_muc set status = '$status' where id_danh_muc='$id'";
    pdo_execute($sql);
}