<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $ipnet_user = $db->query("SELECT ipnet_users.*, plans.name AS plan,subscriptions.id AS sub_id, subscriptions.sub_no AS sub_no FROM ipnet_users LEFT JOIN plans ON plans.id=ipnet_users.plan_id LEFT JOIN subscriptions ON subscriptions.user_id=ipnet_users.id WHERE ipnet_users.id=:id", [
        "id" => $id
    ])->find();


    $ipnet_users_status = $db->query("SELECT * FROM ipnet_users_status")->getAll();
    $plans = $db->query("SELECT * FROM plans")->getAll();
    $townships = $db->query("SELECT * FROM townships")->getAll();


    views("users/show.view.php", [
        "ipnet_user" => $ipnet_user,
        "ipnet_users_status" => $ipnet_users_status,
        "plans" => $plans,
        "townships" => $townships,
    ]);
} else {
    header("location: /login");
}
