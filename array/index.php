<?php 
$Frutas = ['Pera','Mango','Piña'];

 $Frutas[1] ='Sandia';

 //echo $Frutas[1]

 /// array asociativo

$Paises= ['name'=>'Perú','Departamentos'=>24];

/// array multidimensionales
$Estudiantes = [
   "Name"=>'Pedro',
   "Profesiones"=>['Ing.de sistemas','Ing.Civil','Programador'] 
];

//echo $Estudiantes['Profesiones'][1];

$variable = "string";

//echo is_array($Frutas)? 'es un array':'no es un array';  

echo in_array("Mandarina",$Frutas);


///array_push($Frutas,'Cereza');

///print_r($Frutas)

/// explode Hola, Mundo
/*
$Texto = 'Hola,Mundo';

$Texto = explode(",",$Texto);

var_dump($Texto);*/

/// implode

$Cursos = ['Base de datos','PHP Y Mysql','IA'];

$Cursos = implode("-",$Cursos);

echo $Cursos;

/// array_pop

array_pop($Frutas);

print_r($Frutas)












 


?>