<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $invoice = $db->query("SELECT invoices.*, ipnet_users.name AS name,ipnet_users.phone AS phone,ipnet_users.address AS address,ipnet_users.ipnet_id AS ipnet_id,subscriptions.sub_no AS sub_no,payments.id AS payment_id,payments.payment_no AS payment_no,payments.date AS payment_date,payments.amount AS payment_amount FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id LEFT JOIN subscriptions ON subscriptions.id=invoices.sub_id LEFT JOIN payments ON payments.invoice_id=invoices.id WHERE invoices.id=:id", [
        "id" => $id
    ])->find();

    $invoice_items = $db->query("SELECT * FROM invoices_items WHERE invoice_id=:id", [
        "id" => $id
    ])->getAll();


    views("invoices/show.view.php", [
        "invoice" => $invoice,
        "invoice_items" => $invoice_items,
    ]);
} else {
    header("location: /login");
}
