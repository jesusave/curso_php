<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable POST</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container pt-5">
            <div class="card mb-3">
                <div class="card-body">                    
                    <form action="/03-intermedio/04-variable-post/login.php" method="POST">
                        <label for="email">Correo</label>
                        <input type="text" id="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password">

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>