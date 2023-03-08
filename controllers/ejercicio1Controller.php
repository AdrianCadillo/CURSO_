<?php

require '../ejercicios/Ejercicio.php';
use ejercicios\Ejercicio;

$ejercicio = new Ejercicio;

$Texto = $_POST['texto_'] ?? '';

 

if(isset($_POST['procesar']))
{

    $mensaje =  $ejercicio->ejercicio1($Texto,2,6);
    

    $ejercicio->back();


}

if(isset($_POST['enviar']))
{
 echo $ejercicio->ejercicio2($Texto);
}

if(isset($_POST['enviar_']))
{
    echo $ejercicio->ejercicio3($Texto);
}