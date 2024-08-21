<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $users_per_page = 50;

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $filter = isset($_GET['filter']) ? $_GET['filter'] : "default";

    $offset = ($page - 1) * $users_per_page;

    $all_ipnet_users = $db->query("SELECT ipnet_users.*,ipnet_users_status.status,plans.name AS plan,plans.status AS plan_status,townships.name AS township FROM ipnet_users LEFT JOIN ipnet_users_status ON ipnet_users.status_id = ipnet_users_status.id LEFT JOIN plans ON ipnet_users.plan_id = plans.id LEFT JOIN townships ON ipnet_users.township_id = townships.id")->getAll();

    if (!isset($_GET['filter']) && !isset($_GET['search'])) {
        $ipnet_users = $db->query("SELECT ipnet_users.*,ipnet_users_status.status,plans.name AS plan,plans.status AS plan_status,townships.name AS township FROM ipnet_users LEFT JOIN ipnet_users_status ON ipnet_users.status_id = ipnet_users_status.id LEFT JOIN plans ON ipnet_users.plan_id = plans.id LEFT JOIN townships ON ipnet_users.township_id = townships.id LIMIT $users_per_page OFFSET $offset")->getAll();
    }
    if (isset($_GET['search'])) {
        $search = "%" . $_GET['search'] . "%";
        $ipnet_users = $db->query("SELECT ipnet_users.*,ipnet_users_status.status,plans.name AS plan,plans.status AS plan_status,townships.name AS township FROM ipnet_users LEFT JOIN ipnet_users_status ON ipnet_users.status_id = ipnet_users_status.id LEFT JOIN plans ON ipnet_users.plan_id = plans.id LEFT JOIN townships ON ipnet_users.township_id = townships.id WHERE ipnet_users.ipnet_id LIKE '$search' ")->getAll();
    }
    if (isset($_GET['filter'])) {
        $sort = $_GET['sort'];
        $ipnet_users = $db->query("SELECT ipnet_users.*,ipnet_users_status.status,plans.name AS plan,plans.status AS plan_status,townships.name AS township FROM ipnet_users LEFT JOIN ipnet_users_status ON ipnet_users.status_id = ipnet_users_status.id LEFT JOIN plans ON ipnet_users.plan_id = plans.id LEFT JOIN townships ON ipnet_users.township_id = townships.id ORDER BY $filter $sort LIMIT $users_per_page OFFSET $offset")->getAll();
    }

    $ipnet_users_length = count($all_ipnet_users);

    $total_page = ceil($ipnet_users_length / $users_per_page);

    views("users/index.view.php", [
        "ipnet_users" => $ipnet_users,
        "ipnet_users_length" => $ipnet_users_length,
        "page" => $page,
        "total_page" => $total_page,
    ]);
} else {
    header("location: /login");
}
