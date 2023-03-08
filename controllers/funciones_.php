<?php

/// str_replace

use ejercicios\Ejercicio;

$string = "resources.views.category.index";

echo str_replace(".","/",$string);

echo str_repeat("Hola",5);

echo "<br>";

echo ucwords("adrian rosales");

echo strtolower("ADRIAN ROSALES")."<br>";

$variable ="_sistemas@";

echo rtrim($variable,"@");

if(file_exists("../signo_zodiacal.php"))
{
   echo "existe"; 
}else{
    echo "error 404";
}

 
