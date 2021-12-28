<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <p>
        En ocasiones es necesario indicar una variable va a ser inmutable. Ello ocurre porque hay cosas que nunca cambian ni quieres que cambien: número PI, velocidad de la luz, fuerza de la gravedad, días de la semana…
        <br>
        Para crearla usaremos la funcion <code>define()</code>.
    </p>

    <?php 
        define('GRAVEDAD', 9.8);

        echo GRAVEDAD;
    ?>
</body>
</html>