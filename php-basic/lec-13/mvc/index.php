<?php
require('autoload.php');

define('HOST', '127.0.0.1');
define('NOME_BANCO', 'pweb');
define('USUARIO', 'root');
define('SENHA', '');


$namespace = "Controller\\".ucfirst($_GET['class'])."Controller";
$metodo = $_GET['metodo'];

$objeto = new $namespace();
$objeto->$metodo();
?> 