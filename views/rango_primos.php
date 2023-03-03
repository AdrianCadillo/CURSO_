<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signo Zodiacal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <h4>Primo enprimosgo</h4>
            </div>

            <div class="card-body">
                <form action="../bucles/index.php" method="post">
                    <label for="numero_1" class="form-label"><b>Ingrese número inicial</b></label>

                    <input type="text" name="numero_1" class="form-control"
                    autofocus>

                    <label for="numero_2" class="form-label"><b>Ingrese Número final</b></label>

                    <input type="text" name="numero_2" id="numero_2" class="form-control">

                    <div class="mt-2">
                        <button class="btn btn-primary" name="procesar_primos">Procesar</button>
                        <button class="btn btn-danger" name="cancel">cancelar</button>
                    </div>
                </form>

                <div class="mt-2">
                   <?php if(isset($_SESSION['primos'])): ?>
                    <div class="alert alert-success">
                       <?php echo $_SESSION['primos']; ?>
                    </div>
                   <?php unset($_SESSION['primos']); endif; ?> 
                </div>
            </div>
        </div>
    </div>
</body>

</html>