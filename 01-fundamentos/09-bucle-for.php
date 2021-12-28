<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle For</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">

            <div class="card mb-3">
                <div class="card-body">
                    <p>$i++ es equivalente a $i += 1 o $i = $i + 1. Básicamente incrementa en 1 la variable. Además dispones de su antítesis: $i--</p>
                    <?php 
                        for ($i = 0; $i < 10; $i++) {
                            echo "$i \n";
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php
                        $people = array(
                            array(
                                'name' => 'Kalle', 
                                'age' => 0
                            ),

                            array(
                                'name' => 'Pierre', 
                                'age' => 0
                            )
                        );

                        for($i = 0; $i < count($people); ++$i) {
                            $people[$i]['age'] = mt_rand(0, 99);
                        }

                        /*
                            El código anterior puede ser lento, debido a que el tamaño del array se capta en cada iteración. 
                            Dado que el tamaño nunca cambia, el bucle puede ser fácilmente optimizado mediante el uso de una variable intermedia para almacenar el tamaño en lugar de llamar repetidamente a count():

                            for($i = 0, $size = count($people); $i < $size; ++$i) {
                                $people[$i]['age'] = mt_rand(0, 99);
                            }
                        */

                        var_dump($people);
                    ?>
                </div>
            </div>            

        </div>
    </section>
</body>
</html>