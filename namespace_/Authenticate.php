<?php
namespace namespace_;

abstract class Authenticate
{
 /**
  * Metodo para el acceso al sistema
  */
  abstract public function login(string $username,string $password);

}