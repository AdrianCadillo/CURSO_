<?php 
namespace clases;

use traits\Persona as TraitsPersona;

class Persona
{
 use TraitsPersona;

 public function setApellido(string $apellidos){

    $this->Apellido = $apellidos;
 }

 public function setNombres(string $name){

   $this->Nombres = $name; 
 }
 
 
} 