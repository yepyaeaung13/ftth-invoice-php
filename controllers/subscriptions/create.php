<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config["database"]);

    $user_id = $_POST['user_id'];
    $sub_no = $_POST['sub_no'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $remark = $_POST['remark'];

    // create query 
    $result = $db->query("INSERT INTO `subscriptions`(`sub_no`, `user_id`, `start_date`, `end_date`, `remark`, `created_at`) VALUES (:sub_no,:user_id,:start_date,:end_date,:remark,NOW())", [
        "sub_no" => $sub_no,
        "user_id" => $user_id,
        "start_date" => $start_date,
        "end_date" => $end_date,
        "remark" => $remark,
    ])->last_inserted_id();

    header("location: /subscriptions/show?id={$result}");
} else {
    header("location: /login");
}
