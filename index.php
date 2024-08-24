<?php
require "functions.php";
// dd($_SERVER);

$uri=$_SERVER["REQUEST_URI"];
var_dump( $uri);


if($uri==='/php-proj1/'){
    require 'controllers/index.php';

}
else if($uri==='/php-proj1/contact'){
    
    require 'contact.php';
  
}
else if($uri==='/php-proj1/about'){
     
    require 'controllers/about.php';
  
}
else{
    echo "error";
}
