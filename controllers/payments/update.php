<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_POST['payment_id'];
    $payment_date = $_POST['payment_date'];
    $method = $_POST['payment_method'];
    $amount = $_POST['amount'];

    // edit query 
    $db->query("UPDATE `payments` SET `date`=:date,`amount`= :amount,`method`=:method,`updated_at`=NOW() WHERE id=:id", [
        "id" => $id,
        "date" => $payment_date,
        "amount" => $amount,
        "method" => $method,
    ]);

    header("location: /payments/show?id={$id}");
} else {
    header("location: /login");
}
