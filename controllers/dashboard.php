<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $ipnet_users = $db->query("SELECT id FROM ipnet_users")->getAll();

    $ipnet_active_users = $db->query("SELECT id FROM ipnet_users WHERE status_id=1")->getAll();

    $ipnet_inactive_users = $db->query("SELECT id FROM ipnet_users WHERE status_id=2")->getAll();

    $ipnet_terminate_users = $db->query("SELECT id FROM ipnet_users WHERE status_id=3")->getAll();

    $mbps_10_users = $db->query("SELECT id FROM ipnet_users WHERE plan_id=1 and status_id=1")->getAll();
    $mbps_15_users = $db->query("SELECT id FROM ipnet_users WHERE plan_id=2 and status_id=1")->getAll();
    $mbps_20_users = $db->query("SELECT id FROM ipnet_users WHERE plan_id=3 and status_id=1")->getAll();
    $mbps_40_users = $db->query("SELECT id FROM ipnet_users WHERE plan_id=4 and status_id=1")->getAll();
    $mbps_50_users = $db->query("SELECT id FROM ipnet_users WHERE plan_id=5 and status_id=1")->getAll();

    $total_invoices = $db->query("SELECT id FROM invoices")->getAll();
    $total_payments = $db->query("SELECT id FROM payments")->getAll();

    $today = date("Y-m-d");

    $total_sub_expired_users = $db->query("SELECT subscriptions.id,ipnet_users.status_id AS status_id FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id WHERE subscriptions.end_date < :today and ipnet_users.status_id=:status_id", [
        "today" => $today,
        "status_id" => 1,
    ])->getAll();

    $total_sub_active_users = $db->query("SELECT subscriptions.id,ipnet_users.status_id AS status_id FROM subscriptions LEFT JOIN ipnet_users ON ipnet_users.id=subscriptions.user_id WHERE subscriptions.end_date >= :today and ipnet_users.status_id=:status_id", [
        "today" => $today,
        "status_id" => 1,
    ])->getAll();

    $jan = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-01-01",
        "end_date" => date("Y") . "-01-31"
    ])->getAll();

    $feb = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-02-01",
        "end_date" => date("Y") . "-02-31"
    ])->getAll();

    $mar = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-03-01",
        "end_date" => date("Y") . "-03-31"
    ])->getAll();

    $apr = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-04-01",
        "end_date" => date("Y") . "-04-30"
    ])->getAll();

    $may = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-05-01",
        "end_date" => date("Y") . "-05-31"
    ])->getAll();

    $jun = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-06-01",
        "end_date" => date("Y") . "-06-30"
    ])->getAll();

    $jul = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-07-01",
        "end_date" => date("Y") . "-07-31"
    ])->getAll();

    $aug = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-08-01",
        "end_date" => date("Y") . "-08-31"
    ])->getAll();

    $sep = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-09-01",
        "end_date" => date("Y") . "-09-30"
    ])->getAll();

    $oct = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-10-01",
        "end_date" => date("Y") . "-10-31"
    ])->getAll();

    $nov = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-11-01",
        "end_date" => date("Y") . "-11-30"
    ])->getAll();

    $dec = $db->query("SELECT amount FROM payments WHERE date >= :start_date and date <= :end_date", [
        "start_date" => date("Y") . "-12-01",
        "end_date" => date("Y") . "-12-31"
    ])->getAll();

    // start user per twoship 
    $Bahan = $db->query("SELECT id FROM ipnet_users WHERE township_id=1 and status_id=1")->getAll();

    $Tarmwe = $db->query("SELECT id FROM ipnet_users WHERE township_id=2 and status_id=1")->getAll();

    $Yankin = $db->query("SELECT id FROM ipnet_users WHERE township_id=3 and status_id=1")->getAll();

    $South_Oakkalapa = $db->query("SELECT id FROM ipnet_users WHERE township_id=4 and status_id=1")->getAll();

    $Thingangyun = $db->query("SELECT id FROM ipnet_users WHERE township_id=5 and status_id=1")->getAll();

    $Sanchaung = $db->query("SELECT id FROM ipnet_users WHERE township_id=6 and status_id=1")->getAll();

    $Tarketa = $db->query("SELECT id FROM ipnet_users WHERE township_id=7 and status_id=1")->getAll();

    $Pazundaung = $db->query("SELECT id FROM ipnet_users WHERE township_id=8 and status_id=1")->getAll();

    $Alone = $db->query("SELECT id FROM ipnet_users WHERE township_id=9 and status_id=1")->getAll();

    $Kyimyindaing = $db->query("SELECT id FROM ipnet_users WHERE township_id=10 and status_id=1")->getAll();

    $Hlaing = $db->query("SELECT id FROM ipnet_users WHERE township_id=11 and status_id=1")->getAll();

    $Mingalar_Taung_Nyunt = $db->query("SELECT id FROM ipnet_users WHERE township_id=12 and status_id=1")->getAll();
    // end user per township 

    $jan_amounts = array_reduce($jan, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $feb_amounts = array_reduce($feb, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $mar_amounts = array_reduce($mar, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $apr_amounts = array_reduce($apr, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $may_amounts = array_reduce($may, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $jun_amounts = array_reduce($jun, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $jul_amounts = array_reduce($jul, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $aug_amounts = array_reduce($aug, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $sep_amounts = array_reduce($sep, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $oct_amounts = array_reduce($oct, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $nov_amounts = array_reduce($nov, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);
    $dec_amounts = array_reduce($dec, function ($pv, $cv) {
        return $pv + $cv['amount'];
    }, 0);


    $total_10_mbps = count($mbps_10_users) * 10;
    $total_15_mbps = count($mbps_15_users) * 15;
    $total_20_mbps = count($mbps_20_users) * 20;
    $total_40_mbps = count($mbps_40_users) * 40;
    $total_50_mbps = count($mbps_50_users) * 50;

    $total_mbps = $total_10_mbps + $total_15_mbps + $total_20_mbps + $total_40_mbps + $total_50_mbps;

    views("dashboard.view.php", [
        "ipnet_users" => $ipnet_users,
        "ipnet_active_users" => $ipnet_active_users,
        "ipnet_inactive_users" => $ipnet_inactive_users,
        "ipnet_terminate_users" => $ipnet_terminate_users,
        "mbps_10_users" => $mbps_10_users,
        "mbps_15_users" => $mbps_15_users,
        "mbps_20_users" => $mbps_20_users,
        "mbps_40_users" => $mbps_40_users,
        "mbps_50_users" => $mbps_50_users,
        "total_mbps" => $total_mbps,
        "total_invoices" => $total_invoices,
        "total_payments" => $total_payments,
        "total_sub_active_users" => $total_sub_active_users,
        "total_sub_expired_users" => $total_sub_expired_users,
        "jan_amounts" => $jan_amounts,
        "feb_amounts" => $feb_amounts,
        "mar_amounts" => $mar_amounts,
        "apr_amounts" => $apr_amounts,
        "may_amounts" => $may_amounts,
        "jun_amounts" => $jun_amounts,
        "jul_amounts" => $jul_amounts,
        "aug_amounts" => $aug_amounts,
        "sep_amounts" => $sep_amounts,
        "oct_amounts" => $oct_amounts,
        "nov_amounts" => $nov_amounts,
        "dec_amounts" => $dec_amounts,
        "Bahan" => $Bahan,
        "Tarmwe" => $Tarmwe,
        "Yankin" => $Yankin,
        "South_Oakkalapa" => $South_Oakkalapa,
        "Thingangyun" => $Thingangyun,
        "Sanchaung" => $Sanchaung,
        "Tarketa" => $Tarketa,
        "Pazundaung" => $Pazundaung,
        "Alone" => $Alone,
        "Kyimyindaing" => $Kyimyindaing,
        "Hlaing" => $Hlaing,
        "Mingalar_Taung_Nyunt" => $Mingalar_Taung_Nyunt,
    ]);
} else {
    header("location: /login");
}
