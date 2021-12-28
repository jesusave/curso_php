<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticas</title>
</head>
<body>
    <h4>Operadores Aritméticas</h4>

    <?php 
        $resultado = 5 + 3;
        echo $resultado; // 8        

        

        echo '<br>';
    ?>

    <?php 
        $num1 = 8;
        $num2 = 2;

        $resultado = $num1 + $num2; # Sumar
        echo $resultado;
        echo '<br>';

        $resultado = $num1 - $num2; # Restar
        echo $resultado;
        echo '<br>';

        $resultado = $num1 / $num2; # Dividir
        echo $resultado;
        echo '<br>';

        $resultado = $num1 * $num2; # Multiplicar
        echo $resultado;
        echo '<br>';

        $resultado = $num1 % $num2; # Módulo
        echo $resultado;
        echo '<br>';

        $resultado = $num1 ** $num2; # Potencia (Elevado a...)  
        echo $resultado; 
    ?>

    <p>Para realizar operaciones complejas te puedes apoyar en los paréntesis para indicar el orden de las operaciones.</p>
    <?php 
        $resultado = ($num1 % $num2) * 5 + (2 * 5);
        echo $resultado;
        echo '<br>';
    ?>

    <?php
        $num1 = '4';
        $num2 = 99;
        echo $resultado = $num1 + $num2;        
    ?>
    <p>Este efecto se llama tipado débil o tipado dinámico. Debería fallar ya que es imposible sumar un texto con un número, pero PHP te lo permite. A pesar que parezca una fortaleza es una debilidad del lenguaje. ¡No ocurre en otros sitios!</p>
</body>
</html>