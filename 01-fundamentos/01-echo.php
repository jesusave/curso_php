<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer hola mundo en php</title>
</head>
<body>
    <!-- 
        Puede correr un servidor con el comendo 
        php -S localhost:8000  
        y mas especifico con
        php -S localhost:8000 01-echo.php
    -->

    
    <h1 style="color: tomato;">Imprimir en pantalla</h1>

    <?php echo 'Y funciona perfecto!'; ?>

    <?php echo '<p>Este es un parrafo <br> con un salto de linea</p>';?>

    <?php
        echo '<p>En un lugar de la mancha,</p>';
        echo '<p>de cuyo nombre no quiero acordarme...</p>';
    ?>

    <?php
        echo '<p>En un lugar de la mancha,</p>' . PHP_EOL . '<p>de cuyo nombre no quiero acordarme...</p>';
    ?>

    <?php
        echo <<<END
            En un lugar de la mancha, <br>
            de cuyo nombre no quiero acordarme... 
        END;
    ?>

    <h1 style="color: tomato;">Concatenaciòn</h1>
    <?php
        echo 'Verde, amarillo' . ' y ' . 'rojo';
    ?>

    <h1 style="color: tomato;">Comentarios</h1>

    <?php
        // Esto es un comentario de una sola línea en php
        echo 'Esto es una prueba <br>';
        /* Esto es un comentario multilínea
        y otra lína de comentarios */
        echo 'Esto es otra prueba <br>';
        echo 'Una prueba final';
        # Esto es un comentario al estilo de consola de una sola línea
    ?>

</body>
</html>