<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_POST["email"])) {
        echo "Formulairo de inicio de sesiòn <br>";
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        echo printf('Datos enviados: %s %s', $email, $password);
    }