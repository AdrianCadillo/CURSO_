<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ejercicio 3</h4>
                    </div>

                    <div class="card-body">
                        <form action="../controllers/ejercicio1Controller.php" method="post">
                            <label for="texto_" class="form-label">Ingrese un texto (*)</label>
                            <input type="text" class="form-control" name="texto_" id="texto_"
                            autofocus>

                            <button class="btn btn-primary" name="enviar_">Procesar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>