<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $sub_user = $db->query("SELECT subscriptions.*, ipnet_users.ipnet_id AS ipnet_id,ipnet_users.name AS name, ipnet_users.phone AS phone, ipnet_users.address AS address, ipnet_users_status.status AS status, plans.name AS plan, plans.price AS price FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id = subscriptions.user_id LEFT JOIN ipnet_users_status ON ipnet_users_status.id=ipnet_users.status_id LEFT JOIN plans ON plans.id=ipnet_users.plan_id WHERE subscriptions.id=:id", [
        "id" => $id
    ])->find();

    views("subscriptions/show.view.php", [
        "sub_user" => $sub_user,
    ]);
} else {
    header("location: /login");
}
