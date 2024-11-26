<?php 
require './helper.php';
// require './Database.php';
spl_autoload_register(function($class){
    require "{$class}.php";
});
require './routes/route.php';
// $router = require './Router.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];
$route->route($url, $method);




