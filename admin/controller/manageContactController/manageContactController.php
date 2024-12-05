<?php
// controller/manageContactController/manageContactController.php
require_once 'model/contact.php'; // Gọi model để lấy dữ liệu liên hệ

function showContactList() {
    $contacts = getAllContacts(); // Lấy tất cả dữ liệu liên hệ từ model
    if ($contacts === false) {
        echo "Không có dữ liệu liên hệ.";
        return;
    }
    // Gọi view và truyền dữ liệu contact vào
    include 'view/contact/index.php';
}
