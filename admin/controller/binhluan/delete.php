<?php
include_once './model/binhluan.php';

if (isset($_GET['id'])) {
    $commentId = $_GET['id'];
    deleteBinhLuan($commentId);
    $script = "<script> 
        alert('Đã xóa bình luận!');
        window.location = 'index.php?action=listbinhluan';
        </script>";
    echo $script;
}