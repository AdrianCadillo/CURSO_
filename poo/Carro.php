<?php 

class Carro 
{
  //atributos
  
  public string $Color;

  public string $Marca;

  public string $Num_LLantas;

  /// constructor 

  public function __construct()
  {
    echo "Hola, soy un constructor";
  }

  /// acciones

  public function Encender()
  {
    echo "encendiendo....";
  }

  public function getColor():string
  {
    return $this->Color;
  }


}

/// crear un objeto

$Carro = new Carro;

$Carro->Color = 'Rojo';

echo $Carro->getColor()."<br>";

$Carro->Encender();