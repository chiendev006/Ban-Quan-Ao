<?php

include_once "pdo.php";
function getAllContacts() {
    $sql = "SELECT DISTINCT id, name, email, subject, message, created_at FROM contacts ORDER BY created_at DESC";
    return pdo_query($sql);
}



