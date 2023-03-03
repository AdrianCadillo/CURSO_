<?php 

require 'Persona.php';

class Alumno extends Persona
{
    public string $carrera_profesional;

    public string $codigo;
 
    public function __construct($dn,$nm,$apell,$carrera,$cod)
    {
     parent::__construct($dn,$nm,$apell);
     
     $this->carrera_profesional = $carrera;

     $this->codigo = $cod;
    }
}

$Alumno = new Alumno("12345678","Adrian","Rosales","Ing.sistemas",'3721831');

$Alumno->ImprimirDatos();