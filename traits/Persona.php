<?php 
namespace traits;

trait Persona
{
 private string $Apellido;

 private string $Nombres;

 public function Imprimir_Dato():string
 {
  return $this->Apellido." ".$this->Nombres;
 }

 public abstract function setApellido(string $apellidos);

 public abstract function setNombres(string $name);
}