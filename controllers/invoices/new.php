<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $sub_id = $_GET['sub_id'];

    $sub_user = $db->query("SELECT subscriptions.*, plans.name AS plan, plans.price AS price, ipnet_users.ipnet_id AS ipnet_id, ipnet_users.name AS name, ipnet_users.phone AS phone, ipnet_users.address AS address  FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id LEFT JOIN plans ON plans.id=ipnet_users.plan_id WHERE subscriptions.id=:sub_id", [
        "sub_id" => $sub_id
    ])->find();

    $last_inv_no = $db->query("SELECT invoice_no FROM invoices ORDER BY id DESC LIMIT 1")->find();

    if ($last_inv_no) {

        // Extract the numeric part from the last invoice number
        $last_number = (int)substr($last_inv_no["invoice_no"], 4);

        // Increment the numeric part
        $next_number = $last_number + 1;

        // Format the next invoice number with leading zeros
        $next_inv_no = 'INV-' . str_pad($next_number, 5, '0', STR_PAD_LEFT);
    } else {
        // If no invoice exists, start with INV00001
        $next_inv_no = 'INV-00001';
    }

    views("invoices/new.view.php", [
        "next_inv_no" => $next_inv_no,
        "sub_user" => $sub_user,
    ]);
} else {
    header("location: /login");
}
