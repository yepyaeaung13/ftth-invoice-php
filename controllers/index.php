<?php

session_start();

if (isset($_SESSION['user'])) {
    views("index.view.php");
} else {
    header("location: /login");
}
