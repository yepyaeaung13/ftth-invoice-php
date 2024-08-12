<?php

use Core\Database;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password === $confirm_password) {

        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $check_username = $db->query("SELECT * FROM users WHERE username = :username", [
            "username" => $username
        ])->find();

        if (!empty($check_username)) {
            header("location: /login?username=exist");
        } else {
            $db->query("INSERT INTO users (name,username,password,created_at) VALUES (:name,:username,:password, NOW())", [
                "name" => $name,
                "username" => $username,
                "password" => $hash_password,
            ])->find();

            header("location: /login?create=true");
        }
    } else {
        header("location: /login?password-match=false");
    }
}
