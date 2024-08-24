<?php
require "functions.php";
// dd($_SERVER);

$uri=$_SERVER["REQUEST_URI"];
var_dump( parse_Url($uri)['path']);
$path=parse_Url($uri)['path'];

if($path==='/'){
    require 'controllers/index.php';

}
else if($path==='/contact'){
    
    require 'controllers/contact.php';
  
}
else if($path==='/about'){
     
    require 'controllers/about.php';
  
}
else{
    echo "error";
}
