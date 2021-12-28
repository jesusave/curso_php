<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos o Arrays</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container py-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        No es posible almacenar más de un valor en una sola variable, a no ser que utilicemos un <code>array</code>.
                        <br><br>
                        Un array es un mapa ordenado donde los datos tendrán una clave (<code>key</code>) pero muchos valores (<code>values</code>). Por ejemplo, podríamos guardar los días de la semana bajo el mismo nombre de variable.
                    </p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $semana = [
                            'Lunes',
                            'Martes',
                            'Miércoles',
                            'Jueves',
                            'Viernes',
                            'Sábado',
                            'Domingo'
                        ];

                        echo $semana[0]; // Lunes
                        echo '<br>';

                        echo $semana[3]; // Jueves
                        echo '<br>';

                        echo $semana[6]; // Domingo
                        echo '<br>';
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Si quiero ver todo el contenido puedo usar la función nativa de PHP <code>var_dump</code>. 
                        Nos dirá la longitud del array, la posición de cada elemento, su tipo, longitud de cada valor y el propio valor que almacena.
                    </p>
        
                    <p>
                        <code>var_dump</code> no necesita añadir un echo delante. <br>
                        Usa <code>var_dump</code> en lugar de <code>print_r</code>, proporciona más información.
                    </p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        var_dump($semana);
                        echo '<br>';
                    ?>
                </div>
            </div>  
            
            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $corteIngles = [ 'Azul', 39, True, 11.99 ];
                        var_dump($corteIngles);
                        echo '<br>';
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <h5>Crear</h5>
                </div>
                <div class="card-body">
                    <?php 
                        $planetas = [];

                        $planetas[] = 'Marte';
                        $planetas[] = 'Tierra';
                        $planetas[] = 'Venus';

                        var_dump($planetas);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <p>Y si queremos utilizar un método más orientado a la programación funcional, podemos usar array_merge para crear un nuevo array.</p>
                </div>
                <div class="card-body">
                    <p>
                        Si los arrays de entrada tienen las mismas claves de tipo string, el último valor para esa clave sobrescribirá al anterior. 
                        Sin embargo, los arrays que contengan claves numéricas, el último valor no sobrescribirá el valor original, sino que será añadido al final.
                    </p>
                    <?php 

                        $array1    = array("color" => "rojo", 2, 4);

                        $array2    = array("a", "b", "color" => "verde", "dia" => "lunes", 4);

                        $resultadoArrays = array_merge($array1, $array2);
                        
                        var_dump($resultadoArrays);
                    ?>
                </div>
                <div class="card-footer">
                    <p>Una utilidad muy práctica para saber la longitud de un array es usar la funcion count().</p>
                    <?php 
                        echo count($resultadoArrays);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Para cambiar un valor hay que indicar la posición y el nuevo valor a introducir. ¿Recuerdas que el símbolo = es en realidad ←?</p>
                    <?php 
                        $planetas[2] = 'Saturno';
                        var_dump($planetas);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Eliminar un elemento es un poco más complejo, debes usar una función nativa llamada <code>unset</code>.
                        <br>
                        Supongamos que quiero destruir la Tierra antes de que lo haga el hombre. Es el 2º elemento, cuya posición es la 1.
                    </p>
                    <?php 
                        unset($planetas[1]);
                        var_dump($planetas);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Los string pueden ser manipulados igual que un array.</p>

                    <?php 
                        $palabra = 'abcdef';
                        echo $palabra[2]; // c                        
                    ?>

                    <br>

                    <?php 
                        $palabra[2] = 'Z';
                        echo $palabra; // abZdef                        
                    ?>

                    <br>
                    
                    <p>
                        Un string se comporta como un array porque en el fondo no existen las palabras en la programación, sino conjuntos de carácteres. 
                        Dicho de otra manera: un string es un array de muchas letras.
                    </p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        En algún momento tendrás la necesidad de pasar un texto a un array por medio de algún separador. 
                        Por ejemplo, transformar una frase a array dividido por espacios. 
                        Te dejo un ejemplo para realizarlo. El secreto esta en usar preg_split.
                    </p>

                    <?php 
                        $frase = 'En un lugar de la mancha';
                        $arrayDeFrase = preg_split('/[\s,]+/', $frase);
                        
                        echo $arrayDeFrase[2];// Lugar
                        echo '<br>';
                        var_dump($arrayDeFrase);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $lorem = 'Lorem ipsum dolor sit amet';
                        $arrayDeLorem = explode(" ", $lorem);
                        
                        echo $arrayDeLorem[2];// Lugar
                        echo '<br>';
                        var_dump($arrayDeLorem);
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>