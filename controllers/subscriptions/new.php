<?php

use Core\Database;

session_start();

if (isset($_SESSION)) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $selected_ipnet_user = $db->query("SELECT ipnet_users.*, plans.name AS plan, plans.price AS price, ipnet_users_status.status AS status FROM ipnet_users LEFT JOIN plans ON plans.id=ipnet_users.plan_id LEFT JOIN ipnet_users_status ON ipnet_users_status.id=ipnet_users.status_id WHERE ipnet_users.id=:id", [
        "id" => $id
    ])->find();

    $last_sub_no = $db->query("SELECT sub_no FROM subscriptions ORDER BY id DESC LIMIT 1")->find();

    $ipnet_users = $db->query("SELECT id, ipnet_id FROM ipnet_users")->getAll();
    // $plans = $db->query("SELECT * FROM plans")->getAll();
    // $ipnet_users_status = $db->query("SELECT * FROM ipnet_users_status")->getAll();

    if ($last_sub_no) {

        // Extract the numeric part from the last invoice number
        $last_number = (int)substr($last_sub_no["sub_no"], 4);

        // Increment the numeric part
        $next_number = $last_number + 1;

        // Format the next invoice number with leading zeros
        $next_sub_no = 'SUB-' . str_pad($next_number, 5, '0', STR_PAD_LEFT);
    } else {
        // If no invoice exists, start with INV00001
        $next_sub_no = 'SUB-00001';
    }


    views("subscriptions/new.view.php", [
        "next_sub_no" => $next_sub_no,
        "ipnet_users" => $ipnet_users,
        "selected_ipnet_user" => $selected_ipnet_user,
    ]);
} else {
    header("location: /login");
}
