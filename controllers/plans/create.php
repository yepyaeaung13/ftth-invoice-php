<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $plan_name = $_POST['name'];
    $plan_price = $_POST['price'];

    $last_plan_id = $db->query("INSERT INTO plans (name,price) VALUES (:name,:price)", [
        "name" => $plan_name,
        "price" => $plan_price
    ])->last_inserted_id();

    header("location: /plans/show?id={$last_plan_id}");
} else {
    header("location: /login");
}
