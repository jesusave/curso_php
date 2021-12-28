<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        $salto = '<br>';

        /*
            No valido
            $4escalera = 2;
        */

        $nombre = 'Jesùs Avelar'; // Texto. Puede ser con comillas simples o dobles (String)
        $edad = 31; // Enteros (Integer)
        $altura = 1.72; // Decimales, usando el punto en lugar de la coma (Float)
        $mayorEdad = True; // Verdad o mentira (Boolean)
    ?>

    <p><?php echo $nombre; ?></p>

    <!-- Si solo es una línea puedes ahorrarte el punto y coma al fina (;). Incluso existe un atajo para evitar echo. -->
    <p><?= $edad ?></p>


    <h4>Visibilidad (Ámbito de variables)</h4>
    <p>Una variable por defecto tiene un alcance local. No puede usarse en otro script (o página). Si quieres que sea accesible por cualquier documento, debes usar la palabra reservaba global.</p>
    <?php
        $localizacion = 'Valencia'; // Variable Local
        $propietario = 'Cirque du Soleil';
        global $propietario; // Variable Global    
        
        echo $propietario;
    ?>
</body>
</html>