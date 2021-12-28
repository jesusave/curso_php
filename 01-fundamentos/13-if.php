<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional IF</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Los condicionales son una herramienta esencial en cualquier lenguaje de programación. 
                        Sirve para ejecutar instrucciones dependiendo de unos condicionales.
                    </p>

                    <?php 
                        echo "Inicio <br>";
                        if (2 > 0) {
                            echo "En el condicional <br>";
                        }
                        echo "Fin <br>";
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        if (10 > 2 && True && 'HBO' != 'Netflix') {
                            echo 'Se cumple la condiciòn';
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        if ('Ghibli' == 'Ghibli') {
                            echo 'Son iguales :)';
                        } else {
                            echo 'No son iguales :(';
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        if ('Michael Jackson' == 'Moonwalker') {
                            echo 'Gran baile';
                        } elseif ('Michael Jackson' == 'Billie Jean') {
                            echo 'Gran canción';
                        } else {
                            echo 'Rey del Pop';
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php if (2 == 2): ?>
                        Se cumple la condicion
                    <?php else: ?>
                        La condicion no se cumple
                    <?php endif; ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php if (2 > 7): ?>
                        // Código que sea cierto
                    <?php elseif (7 > 2): ?>
                        // Código que se ejecutará si no es cierto.
                    <?php else: ?>
                        // Código que se ejecutará si no es cierto.
                    <?php endif; ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <p>Operador ternario</p>
                    
                    <p>
                        Es posible ejecutar en una sola instrucción con if con un else. 
                        Si estas empezando no te recomiendo usarla, pero no la olvides.
                    </p>

                    <?php echo (5 > 10) ? 'Es verdadero' : 'Es falso'; ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        if (str_contains('La duda es uno de los nombres de la inteligencia', 'duda')) {
                            echo "Si se encontro la palabra";
                        }

                        if (str_starts_with('La duda es uno de los nombres de la inteligencia', 'La duda es')) {
                            echo "Se encontro la palabra al principio";
                        }

                        if (str_ends_with('La duda es uno de los nombres de la inteligencia', 'inteligencia')) {
                            echo "Se encontro la palabra al final";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>