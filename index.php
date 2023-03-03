<?php 
require 'clases/Categoria.php';

require 'clases/Login.php';

require 'clases/SignIn.php';

require 'polimorfismo/Automovil.php';

require 'polimorfismo/Auto.php';

require 'polimorfismo/Bus.php';

$categoria = new Categoria;

$categoria->setIdCategoria(1);

$categoria->setNombreCategoria("Programación");

echo "Id CATEGORIA : {$categoria->getIdCategoria()}
      NOMBRE CATEGORIA : {$categoria->getNombreCategoria()}<br>";

$login = new SignIn;

$login->setUsername("Sistemas@5000");

$login->setPasword("12345678");


echo $login->SignIn("Sistemas@5000","12345678");

echo "<br>";
$datos = [
new Automovil(1234,"Automovil 1"),
new Auto(1234,"Automovil 1",12,"Toyota","Rojo"),
new Bus(1234,"Automovil 1",1245,9.50)
];

foreach($datos as $data):
 echo $data->Print_Data()."<br><br>";
endforeach;
 

      