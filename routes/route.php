<?php 
$route = new Router();

$route->get('/about',['./controller/about.controller.php','index']);
$route->get('/',['./controller/home.controller.php','index']);
$route->get('/contact',['./controller/contacts.controller.php','index']);
$route->post('/contact',['./controller/contacts.controller.php','create']);

