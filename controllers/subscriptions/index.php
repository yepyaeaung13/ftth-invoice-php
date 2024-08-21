<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config["database"]);

    $sub_per_page = 50;

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $filter = isset($_GET['filter']) ? $_GET['filter'] : "default";

    $offset = ($page - 1) * $sub_per_page;

    $all_sub_users = $db->query("SELECT ipnet_users.*,ipnet_users_status.status,plans.name AS plan,plans.status AS plan_status,townships.name AS township FROM ipnet_users LEFT JOIN ipnet_users_status ON ipnet_users.status_id = ipnet_users_status.id LEFT JOIN plans ON ipnet_users.plan_id = plans.id LEFT JOIN townships ON ipnet_users.township_id = townships.id")->getAll();

    if (!isset($_GET['filter']) && !isset($_GET['search'])) {
        $sub_users = $db->query("SELECT subscriptions.*, ipnet_users.ipnet_id AS ipnet_id,ipnet_users.status_id AS status_id, plans.name AS plan, plans.price AS price, ipnet_users_status.status AS status FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id LEFT JOIN plans ON plans.id=ipnet_users.plan_id LEFT JOIN ipnet_users_status ON ipnet_users_status.id=ipnet_users.status_id LIMIT $sub_per_page OFFSET $offset")->getAll();
    }
    if (isset($_GET['search'])) {
        $search = "%" . $_GET['search'] . "%";
        $sub_users = $db->query("SELECT subscriptions.*, ipnet_users.ipnet_id AS ipnet_id,ipnet_users.status_id AS status_id, plans.name AS plan, plans.price AS price, ipnet_users_status.status AS status FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id LEFT JOIN plans ON plans.id=ipnet_users.plan_id LEFT JOIN ipnet_users_status ON ipnet_users_status.id=ipnet_users.status_id WHERE ipnet_users.ipnet_id LIKE '$search' ")->getAll();
    }
    if (isset($_GET['filter'])) {
        $sort = $_GET['sort'];
        $sub_users = $db->query("SELECT subscriptions.*, ipnet_users.ipnet_id AS ipnet_id,ipnet_users.status_id AS status_id, plans.name AS plan, plans.price AS price, ipnet_users_status.status AS status FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id LEFT JOIN plans ON plans.id=ipnet_users.plan_id LEFT JOIN ipnet_users_status ON ipnet_users_status.id=ipnet_users.status_id ORDER BY $filter $sort LIMIT $sub_per_page OFFSET $offset")->getAll();
    }

    $sub_users_length = count($all_sub_users);

    $total_page = ceil($sub_users_length / $sub_per_page);

    views("subscriptions/index.view.php", [
        "sub_users" => $sub_users,
        "page" => $page,
        "total_page" => $total_page,
        "sub_users_length" => $sub_users_length,
    ]);
} else {
    header("location: /login");
}
