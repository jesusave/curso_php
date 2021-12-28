<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle Do-White</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>
                        Se comporta igual que while, salvo que se compromete a ejecutarse al menos una vez. Independientemente de si se cumple la condicional. 
                        El secreto radica en que primero se ejecuta las instrucciones y a continuación se evalúa el condicional.
                    </p>

                    <?php 
                        $i = 1;
                        do {
                            echo $i++;
                        } while ($i < 10);
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $i = 20;
                        do {
                            echo $i++;
                        } while ($i < 10);
                    ?>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>