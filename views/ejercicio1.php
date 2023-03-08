<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <form action="../controllers/ejercicio1Controller.php" method="post">
      <label for="texto_">Ingrese texto</label>
      <input type="text" name="texto_" id="texto_" autofocus
      value="<?php echo isset($_POST['texto_'])?$_POST['texto_']:''; ?>">

      <input type="text" name="edad" value="<?php echo $_POST['edad']??''; ?>">
      <button name="procesar">procesar</button>
    </form>
    <?php $mensaje; ?>
    
</body>
</html>