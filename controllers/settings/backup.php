<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] == "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $export_type = $_POST['export-type'];
    $exportDir = base_path("controllers/backup-files/");

    // Function to export as SQL and save to a file
    function exportSQL($pdo, $dbname, $exportDir)
    {
        $sqlFile = $exportDir . $dbname . "_" . date("Y-m-d_H-i") . ".sql";

        $handle = fopen($sqlFile, 'w');

        $tables = $pdo->query("SHOW TABLES")->getColumn();

        foreach ($tables as $table) {
            $createTableStmt = $pdo->query("SHOW CREATE TABLE `$table`")->find();
            // dd($createTableStmt);
            fwrite($handle, $createTableStmt['Create Table'] . ";\n\n");

            $rows = $pdo->query("SELECT * FROM `$table`")->getAll();
            // dd($rows);
            foreach ($rows as $row) {
                $quotedValues = [];
                foreach ($row as $value) {
                    $quotedValues[] = $value === null ? 'NULL' : $pdo->quote($value);
                }
                fwrite($handle, "INSERT INTO `$table` VALUES(" . implode(',', $quotedValues) . ");\n");
            }
            fwrite($handle, "\n\n");
        }

        fclose($handle);



        return $sqlFile;
    }

    // Handle export based on the selected format
    if ($export_type == 'sql') {

        $dbname = $_ENV['DB_NAME'];

        $sqlFile = exportSQL($db, $dbname, $exportDir);

        function formatSizeUnits($bytes)
        {
            if ($bytes >= 1073741824) {
                $bytes = number_format($bytes / 1073741824, 2) . ' GB';
            } elseif ($bytes >= 1048576) {
                $bytes = number_format($bytes / 1048576, 2) . ' MB';
            } elseif ($bytes >= 1024) {
                $bytes = number_format($bytes / 1024, 2) . ' KB';
            } elseif ($bytes > 1) {
                $bytes = $bytes . ' bytes';
            } elseif ($bytes == 1) {
                $bytes = $bytes . ' byte';
            } else {
                $bytes = '0 bytes';
            }

            return $bytes;
        }

        $file_name = $dbname . "_" . date("Y-m-d_H-i") . ".sql";
        $file_size = formatSizeUnits(filesize($sqlFile));

        $db->query("INSERT INTO backup_files (name,file_size,location,created_at) VALUEs (:name, :file_size, :location, NOW())", [
            "name" => $file_name,
            "file_size" => $file_size,
            "location" => "backup-files/" . $file_name,
        ]);

        // echo "success";

        // Trigger download of the SQL file
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($sqlFile) . '"');
        header('Content-Length: ' . filesize($sqlFile));
        readfile($sqlFile);

        // Optionally delete the file after download
        // unlink($sqlFile);
        // header("location: /settings");
    } else {
        echo "Only SQL format is supported for download in this example.";
    }
} else {
    header("location: /login");
}
