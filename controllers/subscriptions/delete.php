<?php

use Core\Database;

session_abort();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    // delete query
    $db->query("DELETE FROM subscriptions WHERE id=:id", [
        "id" => $id
    ]);

    header("location: /subscriptions");
} else {
    header("location: /login");
}
