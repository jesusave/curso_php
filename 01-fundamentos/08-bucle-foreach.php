<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle Foreach</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">

            <div class="card mb-3">
                <div class="card-body">
                    <p>¿Cuantos años tienes?</p>

                    <select>
                        <?php foreach (range(1, 10) as $num): ?>
                            <option value="<?php echo $num; ?>"><?php echo $num . ' años'; ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                    <br><br>

                    <p>Cada repetición se denomina iteración.</p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Dentro de PHP existen 4 tipos de bucles:</p>
                    <ul>
                        <li>foreach</li>
                        <li>for</li>
                        <li>while</li>
                        <li>do-while</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Es la forma más sencilla de iterar un array.</p>
                    <?php 
                        $animalesFantasticos = ['fénix', 'dragón', 'grifo', 'pegaso', 'cerbero']; 
                    ?>

                    <?php 
                        foreach ($animalesFantasticos as $animal) {
                            echo $animal . ' ';
                        } 
                    ?>

                    <br><br>
                    <p>En caso de que necesitemos la key (posicion), existe otra forma para utilizarlo.</p>
                    <?php 
                        foreach ($animalesFantasticos as $posicion => $animal) {
                            echo "El animal $animal ocupa la posición $posicion <br>" ;
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Respecto a range() es una función nativa de PHP que genera un array de elementos. Admite 2 o 3 parámetros.</p>

                    <?php 
                        var_dump(range(10, 15));
                    ?>

                    <?php 
                        var_dump(range(0, 100, 20));
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Para insertar un bucle dentro de un HTML tienes 2 formas. En el ejemplo esta escrito con foreach pero es válido cualquier loop o condicional.</p>
                    
                    <p>Sintaxis clásica</p>
                    <?php foreach (range(1, 5) as $num) { ?>
                        <p><?php echo $num; ?></p>
                    <?php } ?>

                    <p>Sintaxis alternativa</p>
                    <?php foreach (range(1, 5) as $num): ?>
                        <p><?php echo $num; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Para poder leer un array con más de una dimensión, tendremos que realizar bucles anidados. 
                        O un bucle dentro de otro bucle.
                    </p>
                    
                    <?php 
                        $carrito = [
                            123 => [
                              'nombre' => 'Camisa a cuadros',
                              'precio' => 29.95,
                              'sexo' => 'Hombre'
                            ],
                            234 => [
                              'nombre' => 'Falda manga',
                              'precio' => 19.95,
                              'sexo' => 'Mujer'
                            ],
                            345 => [
                              'nombre' => 'Bolso minúsculo',
                              'precio' => 50,
                              'sexo' => 'Mujer'
                            ]
                        ];
                        
                        foreach ($carrito as $producto) {
                            var_dump($producto);
                        }
                    ?>

                    <p>
                        Ha iterado 3 veces, y en cada ocasión me ha devuelvo un array. 
                        Es lo que hay contenido dentro del primer array, otros arrayss. 
                        Entonces debo recorrer cada uno con otro foreach.
                    </p>

                    <?php 
                        foreach ($carrito as $producto) {
                            foreach ($producto as $elemento) {
                                echo "$elemento <br>";
                            }
                        }
                    ?>

                    <br>
                    <p>
                        Los bucles anidados se pueden realizar con cualquier tipo de loop. 
                        Te recomiendo que trabajes siempre que puedas con foreach ya que será más difícil que acabes teniendo un bucle infinito.
                    </p>
                </div>
            </div>
                        
        </div>
    </section>
</body>
</html>