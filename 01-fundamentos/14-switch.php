<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        La funcionalidad de switch es prácticamente igual a if salvo que es más limitada, solo admite la condicional de igualación.
                    </p>

                    <?php 
                        $num = 1;

                        switch ($num) {
                            case 0:
                                echo "num es igual a 0";
                                break;
                            case 1:
                                echo "num es igual a 1";
                                break;
                            case 2:
                                echo "num es igual a 2";
                                break;
                            default:
                                echo "No se a que es igual";
                                break;
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $num = "Lunes";

                        switch ($num) {
                            case "Lunes":
                                echo "Es lunes";
                                break;
                            case "Martes":
                                echo "Es martes";
                                break;
                            case "Miercoles":
                                echo "Es miercoles";
                                break;
                            case "Jueves":
                                echo "Es jueves";
                                break;
                            case "Viernes":
                                echo "Es viernes";
                                break;
                            case "Sabado":
                                echo "Es sabado";
                                break;
                            case "Domingo":
                                echo "Es domingo";
                                break;
                            default:
                                echo "No existe";
                                break;
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>