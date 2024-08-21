<?php

session_start();

use Core\Database;

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $plan_per_page = 50;

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    $filter = isset($_GET['filter']) ? $_GET['filter'] : "default";

    $offset = ($page - 1) * $plan_per_page;

    $all_plans = $db->query("SELECT * FROM plans")->getAll();

    if (!isset($_GET['filter']) && !isset($_GET['search'])) {
        $plans = $db->query("SELECT * FROM plans LIMIT $plan_per_page OFFSET $offset")->getAll();
    }
    if (isset($_GET['search'])) {
        $search = "%" . $_GET['search'] . "%";
        $plans = $db->query("SELECT * FROM plans WHERE name LIKE '$search' ")->getAll();
    }
    if (isset($_GET['filter'])) {
        $sort = $_GET['sort'];
        $plans = $db->query("SELECT * FROM plans ORDER BY $filter $sort LIMIT $plan_per_page OFFSET $offset")->getAll();
    }

    $plan_length = count($all_plans);

    $total_page = ceil($plan_length / $plan_per_page);

    views("plans/index.view.php", [
        "plans" => $plans,
        "page" => $page,
        "total_page" => $total_page,
        "plan_length" => $plan_length,
    ]);
} else {
    header("location: /login");
}
