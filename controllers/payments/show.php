<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $payment_id = $_GET['id'];

    $payment = $db->query("SELECT payments.*, invoices.user_id AS user_id, invoices.invoice_no AS invoice_no, ipnet_users.ipnet_id AS ipnet_id,ipnet_users.phone AS phone FROM payments LEFT JOIN invoices ON invoices.id=payments.invoice_id LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id WHERE payments.id=:id", [
        "id" => $payment_id
    ])->find();

    views("payments/show.view.php", [
        "payment" => $payment
    ]);
} else {
    header("location: /login");
}
