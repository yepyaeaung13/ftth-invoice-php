<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Define one week in seconds
$oneWeek = 7 * 24 * 60 * 60;

// Set the session timeout to one week
ini_set('session.gc_maxlifetime', $oneWeek);

// Set the session cookie lifetime to one week
session_set_cookie_params($oneWeek);

const BASE_PATH = __DIR__ . "/../";

include BASE_PATH . "Core/functions.php";
include base_path("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    include base_path("{$class}.php");
});

include base_path("Core/router.php");
