<?php

/// funciones

function Saludo()
{
echo "Hola, Como estas?"; 
}

/// funciones con parametros con retorno

function Login(string $Usuario,string $Password):bool 
{
  return
  (
   $Usuario === 'usuario' and $Password === '123456789'
  ) ; 
}

echo Login("usuari1o",'123456789')?'Bienvenido al sistema':'error credenciales';

/// Funciones anónimas y Flecha

$User_ = "Adrian";

$Password_ = "Adrian@3400";

$LoginProcess = function(string $usermane,string $pasword) use($User_,$Password_):bool{
    return
    (
     $usermane === $User_ and $pasword === $Password_
    ) ; 
};
echo "<br>";
echo $LoginProcess("Adrian",'Adrian@3400')?'Bienvenido al sistema':'error credenciales';

echo "<br>";

/// funciones Flecha

$FuncionFlecha = fn(string $Nombre)=> 'Hola, soy la función flecha '.$Nombre;

echo $FuncionFlecha('Adrian');

echo "<br>";

$Username = 'adrian';

$Pssword = "12345";

$FF_1 = fn($pas_,$usu):bool=> $usu === $Username and $pas_ === $Pssword;

echo $FF_1('12345','adrian')?'Bienvenido al sistema':'error';









