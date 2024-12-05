<?php
function saveContact($name, $email, $subject, $message) {
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $name, $email, $subject, $message);
}
