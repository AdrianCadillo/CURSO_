<?php
namespace ejercicios;

class Ejercicio
{
  public function ejercicio1(string $texto,int $Inicial,int $final)
  {
   return substr($texto,$Inicial,$final);
  }  

  public function ejercicio2(string $texto)
  {
    for($i=0;$i<strlen($texto);$i++)
    {
      if(substr($texto,$i,1) === ' ')
      {
        $texto[$i]="_";
      }
    }

    return $texto;
    
  }

  public function ejercicio3(string $texto) /// Rosales Cadillo Adrian
  {
    $texto_ = substr($texto,0,1);

    for($i=0;$i<=strlen($texto);$i++)
    {
     if(substr($texto,$i,1) === ' ') 
     {
      $texto_.=substr($texto,($i+1),1);
     }
    }

    return $texto_;
  }

  public function back()
  {
    echo "<script>history.back()</script>";
  }
}

