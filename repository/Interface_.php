<?php
namespace repository;

interface Interface_
{
/** METODO PARA HACER UN INSERT */

public function Insert_(string $Table,array $datos):String;

/**METODO PARA MOSTRAR TODO REGISTRO  */

public function get(string $Tabla);
}