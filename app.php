<?php
session_start();

use models\Authenticate;

require 'namespace_/Authenticate.php';

require 'models/Authenticate.php';

$modelAuth = new Authenticate;

$Username = $_POST['username']??'';

$Password = $_POST['password']??'';

if(isset($_POST['entrar']))
{
    if($modelAuth->login($Username,$Password)){
      
      $_SESSION['mensaje'] = '1';
    }else
    {
      $_SESSION['mensaje'] = '0';
    }
 header("Location:views/Login.php");   
}
