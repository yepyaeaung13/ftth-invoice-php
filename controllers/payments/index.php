<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $pv_per_page = 50;

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $filter = isset($_GET['filter']) ? $_GET['filter'] : "default";

    $offset = ($page - 1) * $pv_per_page;

    $all_payments = $db->query("SELECT payments.*, invoices.user_id AS user_id, invoices.invoice_no AS invoice_no, ipnet_users.ipnet_id AS ipnet_id FROM payments LEFT JOIN invoices ON invoices.id=payments.invoice_id LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id")->getAll();

    if (!isset($_GET['filter']) && !isset($_GET['search'])) {
        $payments = $db->query("SELECT payments.*, invoices.user_id AS user_id, invoices.invoice_no AS invoice_no, ipnet_users.ipnet_id AS ipnet_id FROM payments LEFT JOIN invoices ON invoices.id=payments.invoice_id LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id ORDER BY payments.date DESC LIMIT $pv_per_page OFFSET $offset")->getAll();
    }
    if (isset($_GET['search'])) {
        $search = "%" . $_GET['search'] . "%";
        $payments = $db->query("SELECT payments.*, invoices.user_id AS user_id, invoices.invoice_no AS invoice_no, ipnet_users.ipnet_id AS ipnet_id FROM payments LEFT JOIN invoices ON invoices.id=payments.invoice_id LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id WHERE ipnet_users.ipnet_id LIKE '$search' ORDER BY payments.date DESC")->getAll();
    }
    if (isset($_GET['filter'])) {
        $sort = $_GET['sort'];
        $payments = $db->query("SELECT payments.*, invoices.user_id AS user_id, invoices.invoice_no AS invoice_no, ipnet_users.ipnet_id AS ipnet_id FROM payments LEFT JOIN invoices ON invoices.id=payments.invoice_id LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id ORDER BY $filter $sort LIMIT $pv_per_page OFFSET $offset")->getAll();
    }

    $pv_length = count($all_payments);

    $total_page = ceil($pv_length / $pv_per_page);

    views("payments/index.view.php", [
        "payments" => $payments,
        "page" => $page,
        "total_page" => $total_page,
        "pv_length" => $pv_length,
    ]);
} else {
    header("location: /login");
}
