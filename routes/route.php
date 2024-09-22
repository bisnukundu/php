<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'=> "./controller/HomeController.php",
    '/about'=> "./controller/AboutController.php"
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    echo "Page Not Found";
}
