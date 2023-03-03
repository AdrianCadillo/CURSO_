<?php
namespace models;

use namespace_\Authenticate as Namespace_Authenticate;

class Authenticate extends Namespace_Authenticate{

 private string $UserName;

 private string $Password_;

 public function __construct()
 {
    $this->UserName = 'Adrian@sistemas';

    $this->Password_ = '123456789';
 }
     
/**
  * Metodo para el acceso al sistema
  */
  public function login(string $username,string $password)
  {
   return (

    $username === $this->UserName and $password === $this->Password_
    
   );
   
  }
}