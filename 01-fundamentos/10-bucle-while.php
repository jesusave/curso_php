<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle White</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">
                    <p>Es el bucle más sencillo y peligroso. Debes prestar mucha atención para que se acabe en algún momento.</p>
                    <?php 
                        $i = 1;
                        while ($i < 10) {
                            echo $i++;
                        }
                    ?>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <?php 
                        $i = 1;
                        while ($i <= 10):
                            echo $i;
                            $i++;
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>