<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $mbps = $_POST['mbps'];
    $description = $_POST['description'];
    $qty = $_POST['qty'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $remark = $_POST['remark'];

    echo $id, $invoice_no, $invoice_date, $mbps, $description, $qty, $unit, $price, $amount, $remark;

    // edit query 

    // header("location: /invoices/show?id=1");
} else {
    header("location: /login");
}
