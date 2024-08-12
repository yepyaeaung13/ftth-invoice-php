<?php

use Core\Database;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $db->query("SELECT * FROM users WHERE username = :username", [
        "username" => $username
    ])->find();

    if (!empty($user)) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;

            header("location: /");
        } else {
            header("location: /login?password=false");
        }
    } else {
        header("location: /login?username=false");
    }
}

views("login.view.php");
