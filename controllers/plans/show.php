<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $plan = $db->query("SELECT * FROM plans WHERE id=:id", [
        "id" => $id
    ])->find();

    views("plans/show.view.php", [
        "plan" => $plan
    ]);
} else {
    header("location: /login");
}
