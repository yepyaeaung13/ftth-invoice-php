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

        $sub_no =
            $worksheet->getCell([1, $row])->getValue();
        $user_id =
            $worksheet->getCell([2, $row])->getValue();
        $start_date =
            $worksheet->getCell([3, $row])->getValue();
        $end_date =
            $worksheet->getCell([4, $row])->getValue();
        $remark =
            $worksheet->getCell([5, $row])->getValue();

        // create query 
        $db->query("INSERT INTO `subscriptions`(`sub_no`, `user_id`, `start_date`, `end_date`, `remark`, `created_at`) VALUES (:sub_no,:user_id,:start_date,:end_date,:remark,NOW())", [
            "sub_no" => $sub_no,
            "user_id" => $user_id,
            "start_date" => $start_date,
            "end_date" => $end_date,
            "remark" => $remark,
        ]);
    }

    header("location: /subscriptions");
} else {
    header("location: /login");
}
