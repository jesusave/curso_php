<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function divide(int $a, int $b = 0) : float {
        if ($b === 0) {
            throw new Exception("Divisiòn por 0 controlada");
        }

        return $a / $b;
    }

    try {
        echo divide(7);
    } catch (Exception $exception) {
        echo $exception->getMessage();
    } finally {
        echo "<br> Final" ;
    }

    function confirmEmail(string $email) : string {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("El formato de correo no es correcto");
        }

        return "Correo correcto";
    }

    echo "<br>";
    
    try {
        echo confirmEmail('jesus@live.com');
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }