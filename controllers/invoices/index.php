<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $inv_per_page = 50;

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $filter = isset($_GET['filter']) ? $_GET['filter'] : "default";

    $offset = ($page - 1) * $inv_per_page;

    $all_invoices = $db->query("SELECT invoices.*, ipnet_users.ipnet_id AS ipnet_id,payments.id AS payment_id FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id LEFT JOIN payments ON payments.invoice_id=invoices.id")->getAll();

    if (!isset($_GET['filter']) && !isset($_GET['search'])) {
        $invoices = $db->query("SELECT invoices.*, ipnet_users.ipnet_id AS ipnet_id,payments.id AS payment_id FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id LEFT JOIN payments ON payments.invoice_id=invoices.id LIMIT $inv_per_page OFFSET $offset")->getAll();
    }
    if (isset($_GET['search'])) {
        $search = "%" . $_GET['search'] . "%";
        $invoices = $db->query("SELECT invoices.*, ipnet_users.ipnet_id AS ipnet_id,payments.id AS payment_id FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id LEFT JOIN payments ON payments.invoice_id=invoices.id WHERE ipnet_users.ipnet_id LIKE '$search' ")->getAll();
    }
    if (isset($_GET['filter'])) {
        $sort = $_GET['sort'];
        $invoices = $db->query("SELECT invoices.*, ipnet_users.ipnet_id AS ipnet_id,payments.id AS payment_id FROM invoices LEFT JOIN ipnet_users ON ipnet_users.id=invoices.user_id LEFT JOIN payments ON payments.invoice_id=invoices.id ORDER BY $filter $sort LIMIT $inv_per_page OFFSET $offset")->getAll();
    }

    $inv_length = count($all_invoices);

    $total_page = ceil($inv_length / $inv_per_page);

    views("invoices/index.view.php", [
        "invoices" => $invoices,
        "page" => $page,
        "total_page" => $total_page,
        "inv_length" => $inv_length,
    ]);
} else {
    header("location: /login");
}
