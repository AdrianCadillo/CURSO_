<?php 
namespace models;

use repository\Interface_;

class InterfaceImpl implements Interface_
{
    /* METODO PARA HACER UN INSERT 
     
     persona ==> dni,apellidos,nombres,direccion  ["dni"=>"4738753"]
    
     INSERT INTO tabla(atributo1,atributo2,...atributon) values(value1,value2,....valuen)
    */

public function Insert_(string $Table,array $datos):string
{
    $Query = "INSERT INTO $Table(";

    foreach($datos as $atributo=>$value)
    {
        $Query.="$atributo,";
    }

    $Query = rtrim($Query,",")." ) VALUES(";

    foreach($datos as $atributo=>$value)
    {
        $Query.=":$atributo,";
    }

    $Query = rtrim($Query,",").")";

    return $Query;
}

/**METODO PARA MOSTRAR TODO REGISTRO  */

public function get(string $Tabla){}
}