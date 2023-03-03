<?php session_start() ?>

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
                <h4>Signo Zodiacal</h4>
            </div>

            <div class="card-body">
                <form action="../signo_zodiacal.php" method="post">
                    <label for="fecha" class="form-label"><b>Seleccione fecha nacimiento</b></label>

                    <input type="date" name="fecha" class="form-control"
                    value="<?php echo isset($_SESSION['input'])? $_SESSION['input']:''; unset($_SESSION['input'])?>">

                    <div class="mt-2">
                        <button class="btn btn-primary" name="procesar">Procesar</button>
                        <button class="btn btn-danger" name="cancel">cancelar</button>
                    </div>
                </form>

                <div class="mt-2">
                   <?php if(isset($_SESSION['mensaje'])): ?>
                    <div class="alert alert-success">
                       <?php echo $_SESSION['mensaje']; ?>
                    </div>
                   <?php unset($_SESSION['mensaje']); endif; ?> 
                </div>
            </div>
        </div>
    </div>
</body>

</html>