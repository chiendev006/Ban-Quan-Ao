<?php
include_once './model/taikhoan.php';
// Nếu cần dữ liệu ở data base thì gọi model
$listTaiKhoan = listTaiKhoan();
// Xử lý dữ liệu từ database về

// Ném qua view để hiển thị cho người dùng
include_once './view/taikhoan/index.php';