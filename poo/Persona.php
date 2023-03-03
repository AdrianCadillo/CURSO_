<?php 

class Persona 
{
public string $Dni;

public String $Nombres;

public String $Apellidos;

public function __construct(string $dni,string $name,string $apellido)
{
    $this->Dni = $dni; $this->Nombres = $name;

    $this->Apellidos = $apellido;
}

public function ImprimirDatos()
{
   echo "Dni : {$this->Dni}<br>Persona : {$this->Apellidos} {$this->Nombres} ";
}
}