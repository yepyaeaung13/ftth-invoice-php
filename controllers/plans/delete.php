<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    // delete query 

    $db->query("DELETE FROM plans WHERE id=:id", [
        "id" => $id
    ]);

    header("location: /plans");
} else {
    header("location: /login");
}
