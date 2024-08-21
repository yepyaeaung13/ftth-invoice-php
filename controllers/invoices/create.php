<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $invoice_no = $_POST["invoice_no"];
    $user_id = $_POST["user_id"];
    $sub_id = $_POST["sub_id"];
    $invoice_date = $_POST["invoice_date"];
    $remark = $_POST["remark"];
    $total_amount = $_POST["total_amount"];
    $discount_amount = $_POST["discount_amount"];

    $items = $_POST["items"];
    $descriptions = $_POST["descriptions"];
    $qty = $_POST["qty"];
    $unit = $_POST["unit"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    $result_inv_id = $db->query("INSERT INTO `invoices`(`invoice_no`, `date`, `user_id`, `sub_id`, `total_amount`, `discount_amount`, `remark`, `created_at`) VALUES (:invoice_no,:date,:user_id,:sub_id,:total_amount,:discount_amount,:remark, NOW())", [
        "invoice_no" => $invoice_no,
        "date" => $invoice_date,
        "user_id" => $user_id,
        "sub_id" => $sub_id,
        "total_amount" => $total_amount,
        "discount_amount" => $discount_amount,
        "remark" => $remark,
    ])->last_inserted_id();

    for ($i = 0; $i < count($items); $i++) {
        $db->query("INSERT INTO `invoices_items`(`name`, `descriptions`, `qty`, `unit`, `price`, `amount`, `invoice_id`, `created_at`) VALUES (:name,:descriptions,:qty,:unit,:price,:amount,:invoice_id,NOW())", [
            "name" => $items[$i],
            "descriptions" => $descriptions[$i],
            "qty" => $qty[$i],
            "unit" => $unit[$i],
            "price" => $price[$i],
            "amount" => $amount[$i],
            "invoice_id" => $result_inv_id,
        ]);
    }

    header("location: /invoices/show?id={$result_inv_id}");
} else {
    header("location: /login");
}
