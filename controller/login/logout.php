<?php
session_start(); // Đảm bảo session được sử dụng
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy session
header('Location: index.php'); // Quay lại trang chính
exit();
?>