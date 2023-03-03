<?php 
class Auto extends Automovil
{
    private int $Id_Auto;

    private string $marca;

    private string $color;

    public function __construct(private int $serie_,private string $name,
     private int $Id_auto,private string $marca_,private string $color_)
    {
      parent::__construct($serie_,$name); 

      $this->Id_Auto = $Id_auto;

      $this->marca = $marca_;

      $this->color = $color_;
    }

   /// metodo 

 public function Print_Data()
 {
    return "SERIE :".$this->getSerie()."<br> NOMBRE : {$this->getNombre()}<br>
            ID AUTO : {$this->Id_Auto}<br>MARCA : {$this->marca}<br>
            COLOR: {$this->color}";
 }
}