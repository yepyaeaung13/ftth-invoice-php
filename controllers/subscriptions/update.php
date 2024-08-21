<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config["database"]);

    $id = $_POST['sub_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $remark = $_POST['remark'];

    // create query 
    $db->query("UPDATE `subscriptions` SET `start_date`=:start_date,`end_date`=:end_date,`remark`=:remark,`updated_at`=NOW() WHERE id=:id", [
        "id" => $id,
        "start_date" => $start_date,
        "end_date" => $end_date,
        "remark" => $remark,
    ]);

    header("location: /subscriptions/show?id={$id}");
} else {
    header("location: /login");
}
