<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $ipnet_users_status = $db->query("SELECT * FROM ipnet_users_status")->getAll();
    $plans = $db->query("SELECT * FROM plans")->getAll();
    $townships = $db->query("SELECT * FROM townships")->getAll();

    views("users/new.view.php", [
        "ipnet_users_status" => $ipnet_users_status,
        "plans" => $plans,
        "townships" => $townships
    ]);
} else {
    header("location: /login");
}
