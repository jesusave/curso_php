<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $cupon = filter_var($_GET['cupon'], FILTER_SANITIZE_STRING);
    if (!$cupon) {
        var_dump("No se encontrò ningùn cupòn");
    }
    echo $cupon;
