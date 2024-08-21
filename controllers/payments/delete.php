<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_POST['id'];

    $db->query("DELETE FROM payments WHERE id=:id", [
        "id" => $id
    ]);

    header("location: /payments");
} else {
    header("location: /login");
}
