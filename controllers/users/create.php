<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $ipnet_id = $_POST['ipnet_id'];
    $status_id = $_POST['status_id'];
    $plan_id = $_POST['plan_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $township_id = $_POST['township_id'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $installed_date = $_POST['installed_date'];
    $remark = $_POST['remark'];

    // create query 
    $result = $db->query("INSERT INTO `ipnet_users`(`ipnet_id`, `status_id`, `plan_id`, `name`, `phone`, `township_id`, `address`, `location`, `installed_date`, `remark`, `created_at`) VALUES (:ipnet_id,:status_id,:plan_id,:name,:phone,:township_id,:address,:location,:installed_date,:remark,NOW())", [
        "ipnet_id" => $ipnet_id,
        "status_id" => $status_id,
        "plan_id" => $plan_id,
        "name" => $name,
        "phone" => $phone,
        "township_id" => $township_id,
        "address" => $address,
        "location" => $location,
        "installed_date" => $installed_date,
        "remark" => $remark,
    ])->last_inserted_id();

    header("location: /users/show?id={$result}");
} else {
    header("location: /login");
}
