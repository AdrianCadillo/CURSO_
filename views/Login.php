<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>

                    <div class="card-body">
                        <form action="../app.php" method="post">
                            <label for="username" class="form-label">Username *</label>
                            <input type="text" class="form-control" id="username" name="username">

                            <label for="password" class="form-label">Password *</label>
                            <input type="password" class="form-control" id="password" name="password">

                            <button class="btn btn-primary m-3" name="entrar">Acceder al sistema</button>
                        </form>
                    </div>
                    <div class="m-4">
                        <?php if (isset($_SESSION['mensaje'])) : ?>
                            <?php if ($_SESSION['mensaje'] === '1') : ?>
                                <div class="alert alert-success">
                                 <b>Bienvenido al sistema</b>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-danger">
                                 <b>Error en las credenciales</b>
                                </div>
                            <?php endif; ?>
                        <?php unset($_SESSION['mensaje']); endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>