<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $plan_id = $_POST['id'];
    $plan_status = $_POST['status'];
    $plan_name = $_POST['name'];
    $plan_price = $_POST['price'];

    $db->query("UPDATE plans SET `name`=:name, `price`=:price, `status`=:status WHERE id=:id", [
        "id" => $plan_id,
        "name" => $plan_name,
        "price" => $plan_price,
        "status" => $plan_status,
    ])->last_inserted_id();

    header("location: /plans/show?id={$plan_id}");
} else {
    header("location: /login");
}
