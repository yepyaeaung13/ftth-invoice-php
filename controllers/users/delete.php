<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    // delete query 

    $db->query("DELETE FROM ipnet_users WHERE id=:id", [
        "id" => $id
    ]);

    header("location: /users");
} else {
    header("location: /login");
}
