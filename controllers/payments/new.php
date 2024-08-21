<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $invoice_id = $_GET['invoice_id'];

    $invoice = $db->query("SELECT invoices.*, ipnet_users.ipnet_id AS ipnet_id FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id WHERE invoices.id=:id", [
        "id" => $invoice_id
    ])->find();

    $last_pv_no = $db->query("SELECT payment_no FROM payments ORDER BY id DESC LIMIT 1")->find();

    if ($last_pv_no) {

        // Extract the numeric part from the last invoice number
        $last_number = (int)substr($last_pv_no["payment_no"], 3);

        // Increment the numeric part
        $next_number = $last_number + 1;

        // Format the next invoice number with leading zeros
        $next_pv_no = 'PV-' . str_pad($next_number, 5, '0', STR_PAD_LEFT);
    } else {
        // If no invoice exists, start with INV00001
        $next_pv_no = 'PV-00001';
    }


    views("payments/new.view.php", [
        "invoice" => $invoice,
        "next_pv_no" => $next_pv_no,
    ]);
} else {
    header("location: /login");
}
