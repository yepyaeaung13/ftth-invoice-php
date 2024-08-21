<?php

use Core\Database;
use PhpOffice\PhpSpreadsheet\IOFactory;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $xlsx = $_FILES['xlsx']['tmp_name'];
    $spreadsheet = IOFactory::load($xlsx);

    // Get the first worksheet in the Excel file
    $worksheet = $spreadsheet->getActiveSheet();

    // Get the highest row number and column letter referenced in the worksheet
    $highest_row = $worksheet->getHighestRow();
    $highest_column = $worksheet->getHighestColumn();

    for ($row = 2; $row <= $highest_row; $row++) {
        $ipnet_id = $worksheet->getCell([1, $row])->getValue();
        $status_id = $worksheet->getCell([2, $row])->getValue();
        $plan_id = $worksheet->getCell([3, $row])->getValue();
        $name = $worksheet->getCell([4, $row])->getValue();
        $phone = $worksheet->getCell([5, $row])->getValue();
        $township_id = $worksheet->getCell([6, $row])->getValue();
        $address = $worksheet->getCell([7, $row])->getValue();
        $location = $worksheet->getCell([8, $row])->getValue();
        $installed_date = $worksheet->getCell([9, $row])->getValue();
        $remark = $worksheet->getCell([10, $row])->getValue();

        // echo $ipnet_id, $status_id, $plan_id, $name, $phone, $township_id, $address, $location, $installed_date, $remark;

        // create query 
        $db->query("INSERT INTO `ipnet_users`(`ipnet_id`, `status_id`, `plan_id`, `name`, `phone`, `township_id`, `address`, `location`, `installed_date`, `remark`, `created_at`) VALUES (:ipnet_id,:status_id,:plan_id,:name,:phone,:township_id,:address,:location,:installed_date,:remark,NOW())", [
            "ipnet_id" => $ipnet_id,
            "status_id" => $status_id,
            "plan_id" => $plan_id,
            "name" => $name,
            "phone" => $phone,
            "township_id" => $township_id,
            "address" => $address,
            "location" => $location,
            "installed_date" => $installed_date,
            "remark" => $remark,
        ]);
    }

    header("location: /users");
} else {
    header("location: /login");
}
