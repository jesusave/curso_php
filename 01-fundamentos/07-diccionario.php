<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>Las claves (key) pueden ser definidas por nosotros. A esto se le denomina diccionario.</p>

                    <?php 
                        $empleados = [
                            'Juan' => 34,
                            'Luisa' => 56
                        ];
                        
                        var_dump($empleados);
                    ?>

                    <p>Para leer será de la misma forma, salvo que ya no tenemos posiciones sino nuestras propias claves.</p>

                    <?php echo $empleados['Juan'] ?>
                    
                    <br>
                    <!-- Añadir -->
                    <?php
                        $empleados = [];
                        $empleados['Manolo'] = 99;
                        var_dump($empleados);
                    ?>

                    <br>
                    <!-- Modificar -->
                    <?php 
                        $empleados['Manolo'] = 11;
                        var_dump($empleados);
                    ?>

                    <br>

                    <?php 
                        $empleados = [];
                        $empleados['Manolo'] = 99;
                        $empleados['Juan'] = 99;
                        var_dump($empleados);
                    ?>

                    <br>
                    <!-- Borrar -->
                    <?php 
                        unset($empleados['Manolo']);
                        var_dump($empleados);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Array de dos dimensiones, cuando un array tiene dentro otro array</p>
                    <?php 
                        $arrayRizo = [
                            []
                        ];
                        
                        var_dump($arrayRizo);
                    ?>
                    
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Tiene infinidad de usos. Pensemos que tenemos un carrito de compras. 
                        Cada producto tiene su propio código de barras, precio, nombre, color y género.
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

                        var_dump($carrito);
                        
                    ?>

                    <br><br>
                    <p>El mecanismo para gestionarlo es igual al diccionario salvo que debemos ir nodo por nodo.</p>
                    <p><?php echo $carrito[345]['nombre']; ?></p>
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>