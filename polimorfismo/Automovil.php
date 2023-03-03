<?php
class Automovil 
{
 private int $Serie;

 private string $Nombre;

 public function __construct(private int $serie,private string $name)
 {
    $this->Serie = $serie;

    $this->Nombre = $name;
 }

 public function Print_Data()
 {
    return "SERIE : {$this->Serie}<br>NOMBRE : {$this->Nombre}";
 }
 

 /**
  * Get the value of Serie
  */ 
 public function getSerie()
 {
  return $this->Serie;
 }

 /**
  * Get the value of Nombre
  */ 
 public function getNombre()
 {
  return $this->Nombre;
 }
}