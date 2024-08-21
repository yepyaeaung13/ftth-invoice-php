<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $invoice_id = $_POST["invoice_id"];
    $payment_date = $_POST["payment_date"];
    $payment_no = $_POST["payment_no"];
    $method = $_POST["payment_method"];
    $amount = $_POST["amount"];

    $last_pv_id = $db->query("INSERT INTO `payments`( `payment_no`, `date`, `amount`, `method`, `invoice_id`, `created_at`) VALUES (:payment_no,:date,:amount,:method,:invoice_id,NOW())", [
        "payment_no" => $payment_no,
        "date" => $payment_date,
        "amount" => $amount,
        "method" => $method,
        "invoice_id" => $invoice_id,
    ])->last_inserted_id();

    header("location: /payments/show?id={$last_pv_id}");
} else {
    header("location: /login");
}
