<?php 

abstract class Login{

    /*** DEFINIMOS METODOS */

    abstract public function SignIn(string $Usuario,string $Password):bool;
} 