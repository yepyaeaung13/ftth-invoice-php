<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $backup_files = $db->query("SELECT * FROM backup_files")->getAll();

    views("setting.view.php", [
        "backup_files" => $backup_files
    ]);
} else {
    header("location: /login");
}
