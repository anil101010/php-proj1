<?php
$uri=parse_Url($_SERVER["REQUEST_URI"])['path'];
var_dump(  $uri );


$routes=[
    '/'=>'controllers/index.php',
    '/contact'=>'controllers/contact.php',
    '/about'=>'controllers/about.php'
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}
else{
    echo "error";
}
 