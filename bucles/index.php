<?php 
session_start();

$Numero = $_POST['numero']?? '';

if(isset($_POST['procesar'])):
if(!empty($Numero)):

    $_SESSION['input'] = $Numero;
 /*
 Crear un programa , que me permita
 ingresar un número, luego  imprima por
 pantalla si el número  es primo o no lo es.
 do-while */

 $i = 1;

 $Contador = 0;

 while($i<=$Numero):

    if($Numero % $i === 0):
     $Contador++;
    endif;
 
   $i++;  
 endwhile;
 
 if($Contador === 2):
  $_SESSION['mensaje'] = "El número {$Numero} es primo";

 else:

   $_SESSION['mensaje'] = "El número {$Numero} no es primo";
 endif;

 header("Location:../views/primo.php");
endif;
endif;

if(isset($_POST['cancel'])):
    header("Location:../views/primo.php");
endif;


$Numero_Inicial = $_POST['numero_1'] ?? '';

$Numero_Final = $_POST['numero_2'] ?? '';

if(isset($_POST['procesar_primos'])){
    /*
Implementar el problema anterior para devolver 
los número primos en un rango de números, por ejemplo [12-190]
for
 */

$Primos = "";

/// 7,8,9,10,11----- 32
for($var=$Numero_Inicial;$var<=$Numero_Final;):
    $Contador_ = 0;
 for($j = 1;$j<=$var;):
     
    if($var % $j === 0):
      $Contador_++;
    endif;
    $j++;
 endfor;

 if($Contador_ === 2):
   $Primos.=$var." - ";
 endif;
$var++;    
endfor;

 $_SESSION['primos'] = $Primos = trim($Primos," - "); 

 header("Location:../views/rango_primos.php");
}

/*
Implementar un programa en php con bucle do while, 
que le permita a un   usuario ingresar su fecha 
de nacimiento, y a través de ello imprimir por 
pantalla su número de la suerte. Ejemplo : 

Fecha Nacimiento : 05/10/1997 --> 5 + 10 +1997 = 2012 --> 2+0+1+2 = 5
*/
$FechaNacimiento = "1996-11-04";

$Dia = substr($FechaNacimiento,8,2);

$Mes = substr($FechaNacimiento,5,2);

$Anio = substr($FechaNacimiento,0,4);

$SumaCifras = $Dia + $Mes + $Anio;

$Resto = 0;

$Nueva_Suma = 0;

$Numero_Suerte = 0;

do{
$Resto = floor($SumaCifras) % 10;

$SumaCifras/=10;

$Nueva_Suma+= $Resto;

}while($SumaCifras<>0);

do{
    $Resto = floor($Nueva_Suma) % 10;
    
    $Nueva_Suma/=10;
    
    $Numero_Suerte+=$Resto;
    
}while($Nueva_Suma<>0);

echo $Numero_Suerte;



?>