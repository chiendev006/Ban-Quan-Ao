<?php
include_once './model/binhluan.php';

// Nếu cần dữ liệu ở data base thì gọi model
$listBinhluan = listBinhluan();

// Xử lý dữ liệu từ database về

// Ném qua view để hiển thị cho người dùng
include_once './view/binhluan/index.php';