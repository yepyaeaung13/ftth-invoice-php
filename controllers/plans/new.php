<?php

session_start();

if ($_SESSION['user']) {
    views("plans/new.view.php");
} else {
    header("location: /login");
}
