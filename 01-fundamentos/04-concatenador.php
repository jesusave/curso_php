<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenador</title>
</head>
<body>
    <p>No es lo mismo usar comillas simples o dobles.</p>
    <?php
        $texto1 = 'Atapuerca';
        $texto2 = "Museo de la Evolucion";
        
        $emisora = '101.6 FM';
        echo "Me gusta escuchar $emisora";
        // Me gusta escuchar música

        echo '<br>';

        $mes = 'Junio';
        $dia = '16';
        echo "Mi cumpleaños es el $dia de $mes";
        // Mi cumpleaños es el 16 de Junio

    ?>
</body>
</html>