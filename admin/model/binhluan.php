<?php
include_once 'pdo.php';

// Hàm lấy danh sách bình luận
function listBinhLuan() {
    $sql = 'SELECT * FROM binh_luan';
    return pdo_query($sql);
}

// Hàm xóa bình luận
function deleteBinhLuan($commentId)
{
    $sql = 'DELETE FROM binh_luan WHERE id_binhluan = ?';
    pdo_execute($sql, $commentId); // Thực thi câu lệnh xóa
}
