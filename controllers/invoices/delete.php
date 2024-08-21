<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_POST['id'];

    $db->query("DELETE FROM invoices WHERE id=:id", [
        "id" => $id
    ]);

    header("location: /invoices");
} else {
    header("location: /login");
}
