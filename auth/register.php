<?php
require_once '../config/database.php';
require_once '../config/functions.php';
if (isset($_POST['Register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if (isUsernameExist($username)) {
        echo 'Username sudah terdaftar';
        header('Location: index.php');
    } else if (isEmailExist($email)) {
        echo 'Email sudah terdaftar';
        header('Location: index.php');
    } else {
        if (register($username, $email, $password)) {
            header('Location: login.php');
        } else {
            echo 'Gagal register';
        }
        header('Location: index.php');
    }
}
