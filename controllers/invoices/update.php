<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);


    $invoice_id = $_POST["invoice_id"];
    $invoice_date = $_POST["invoice_date"];
    $remark = $_POST["remark"];
    $total_amount = $_POST["total_amount"];
    $discount_amount = $_POST["discount_amount"];

    $items_id = $_POST["items_id"];
    $items = $_POST["items"];
    $descriptions = $_POST["descriptions"];
    $qty = $_POST["qty"];
    $unit = $_POST["unit"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    // edit query 
    $db->query("UPDATE `invoices` SET `date`=:date,`total_amount`=:total_amount,`discount_amount`=:discount_amount,`remark`=:remark,`updated_at`=NOW() WHERE id=:id", [
        "id" => $invoice_id,
        "date" => $invoice_date,
        "total_amount" => $total_amount,
        "discount_amount" => $discount_amount,
        "remark" => $remark,
    ]);

    // new items update list query
    if (count($items_id) !== count($items)) {
        for ($i = count($items_id); $i < count($items); $i++) {
            $db->query("INSERT INTO `invoices_items`(`name`, `descriptions`, `qty`, `unit`, `price`, `amount`, `invoice_id`, `created_at`) VALUES (:name,:descriptions,:qty,:unit,:price,:amount,:invoice_id,NOW())", [
                "name" => $items[$i],
                "descriptions" => $descriptions[$i],
                "qty" => $qty[$i],
                "unit" => $unit[$i],
                "price" => $price[$i],
                "amount" => $amount[$i],
                "invoice_id" => $invoice_id,
            ]);
        }
    }

    // exist items update query 
    for ($i = 0; $i < count($items_id); $i++) {
        $result = $db->query("UPDATE `invoices_items` SET `name`=:name,`descriptions`=:descriptions,`qty`=:qty,`unit`=:unit,`price`=:price,`amount`=:amount,`updated_at`=NOW() WHERE id=:id", [
            "id" => $items_id[$i],
            "name" => $items[$i],
            "descriptions" => $descriptions[$i],
            "qty" => $qty[$i],
            "unit" => $unit[$i],
            "price" => $price[$i],
            "amount" => $amount[$i],
        ]);
    }

    header("location: /invoices/show?id={$invoice_id}");
} else {
    header("location: /login");
}
