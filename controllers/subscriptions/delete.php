<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];

    // delete query 
} else {
    header("location: /login");
}
