<?php

use models\InterfaceImpl;

require 'repository/Interface_.php';

require 'models/InterfaceImpl.php';

$interface = new InterfaceImpl;

echo $interface->Insert_("usuario",[
"username"=>"adriansistemas",
"email"=>"email@gmail.com",
"password"=>"123456"    
]);