<?php
function register($username, $email, $password)
{
    $db = new Database;
    $db->query("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $db->bind('username', $username);
    $db->bind('email', $email);
    $db->bind('password', $password);
    $db->execute();
    return $db->rowCount();
}
function isUsernameExist($username)
{
    $db = new Database;
    $db->query("SELECT * FROM users WHERE username = :username");
    $db->bind('username', $username);
    $db->execute();
    $row = $db->rowCount();
    if ($row > 0) {
        return true;
    } else {
        return false;
    }
}
function isEmailExist($email)
{
    $db = new Database;
    $db->query("SELECT * FROM users WHERE email = :email");
    $db->bind('email', $email);
    $db->execute();
    $row = $db->rowCount();
    if ($row > 0) {
        return true;
    } else {
        return false;
    }
}
