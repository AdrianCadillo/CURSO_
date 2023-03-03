<?php 

class Bus extends Automovil
{
 private int $Id_Bus;

 private float $precio_pasaje;

 public function __construct(private int $serie_,private string $name,
  private int $Id_bus,private float $precio)
 {
    parent::__construct($serie_,$name);

    $this->Id_Bus = $Id_bus;

    $this->precio_pasaje = $precio;
 }

 public function Print_Data()
 {
    return "SERIE :".$this->getSerie()."<br> NOMBRE : {$this->getNombre()}<br>
            ID BUS : {$this->Id_Bus}<br>PRECIO PASAJE : {$this->precio_pasaje}";
 }
}

