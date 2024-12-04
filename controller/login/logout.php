<?php


// Hủy toàn bộ session
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy session hiện tại

// Chuyển hướng người dùng về trang đăng nhập hoặc trang chủ
header("Location: index.php");
exit();
?>
