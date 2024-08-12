<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $ipnet_id = $_POST['ipnet_id'];
    $status = $_POST['status'];
    $mbps = $_POST['mbps'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $installed_date = $_POST['installed_date'];
    $remark = $_POST['remark'];

    // create query 

    header("location: /users/show?id=1");
} else {
    header("location: /login");
}
