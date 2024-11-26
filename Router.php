<?php 
class Router{
    public $routes = [];

    function route($uri, $method){

        
        foreach( $this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === $method){
                require_once "./views/header.template.php";
                require $route['controller'][0];
                $route['controller'][1]();
                require_once "./views/footer.template.php";
                exit;
            }
        }
        die("Page Not Found");

    }
    function get($uri,$controller){

        $this->routes[]= [
            "uri"=> $uri,
            "controller"=>$controller,
            "method"=>"GET"
         ];
    }
    function post($uri,$controller){

        $this->routes[]= [
            "uri"=> $uri,
            "controller"=>$controller,
            "method"=>"POST"
         ];
    }
}