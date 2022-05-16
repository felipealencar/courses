<?php
require_once __DIR__. '/inc/bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if(isset($uri[4]) && ($uri[4] != 'user')){
    header('HTTP/1.1 404 Não encontrado');
    exit();
}

require_once ROOT_PATH . 'Controller/Api/UserController.php';
$userController = new UserController();
$methodName = $uri[5] . 'Action'; 
$userController->$methodName();
?>