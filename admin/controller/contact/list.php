<?php
include_once './model/contact.php';
// Nếu cần dữ liệu ở data base thì gọi model
$listContact = listContact();
// Xử lý dữ liệu từ database về

// Ném qua view để hiển thị cho người dùng
include_once './view/contact/index.php';