<?php
require_once '../config/database.php';
if (isset($_POST['Login'])) {
    $input = $_POST['input'];
    $password = $_POST['password'];
    $db = new Database;
    $db->query("SELECT * FROM users WHERE username = :input OR email = :input");
    $db->bind('input', $input);
    $user = $db->single();
    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['idUser'] = $user['id'];
            header('Location: ../index.php');
        } else {
            echo 'Password salah';
            header('Location: index.php');
        }
    } else {
        echo 'Username tidak ditemukan';
        header('Location: index.php');
    }
}
