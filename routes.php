<?php

return [
    "/" => "controllers/index.php",

    "/login" => "controllers/accounts/login.php",
    "/logout" => "controllers/accounts/logout.php",
    "/accounts/create" => "controllers/accounts/create.php",

    "/dashboard" => "controllers/dashboard.php",

    // users routes 
    "/users" => "controllers/users/index.php",
    "/users/create" => "controllers/users/create.php",
    "/users/update" => "controllers/users/update.php",
    "/users/delete" => "controllers/users/delete.php",
    "/users/show" => "controllers/users/show.php",
    "/users/new" => "controllers/users/new.php",
    "/users/import" => "controllers/users/import.php",

    // invoice routes 
    "/invoices" => "controllers/invoices/index.php",
    "/invoices/show" => "controllers/invoices/show.php",
    "/invoices/new" => "controllers/invoices/new.php",
    "/invoices/create" => "controllers/invoices/create.php",
    "/invoices/update" => "controllers/invoices/update.php",
    "/invoices/delete" => "controllers/invoices/delete.php",

    // payments routes 
    "/payments" => "controllers/payments/index.php",
    "/payments/show" => "controllers/payments/show.php",
    "/payments/new" => "controllers/payments/new.php",
    "/payments/create" => "controllers/payments/create.php",
    "/payments/update" => "controllers/payments/update.php",
    "/payments/delete" => "controllers/payments/delete.php",

    // subscription 
    "/subscriptions" => "controllers/subscriptions/index.php",
    "/subscriptions/show" => "controllers/subscriptions/show.php",
    "/subscriptions/new" => "controllers/subscriptions/new.php",
    "/subscriptions/create" => "controllers/subscriptions/create.php",
    "/subscriptions/delete" => "controllers/subscriptions/delete.php",
    "/subscriptions/update" => "controllers/subscriptions/update.php",
    "/subscriptions/import" => "controllers/subscriptions/import.php",

    // plans routes 
    "/plans" => "controllers/plans/index.php",
    "/plans/show" => "controllers/plans/show.php",
    "/plans/new" => "controllers/plans/new.php",
    "/plans/create" => "controllers/plans/create.php",
    "/plans/update" => "controllers/plans/update.php",
    "/plans/delete" => "controllers/plans/delete.php",

    "/setting" => "controllers/setting.php",
];
