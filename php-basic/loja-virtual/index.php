<?php
$classe = $_GET['classe'];
$metodo = $_GET['metodo'];

$classe .= 'Controller';

require_once 'controllers/'.$classe.'.php';

$objeto = new $classe();
$objeto->$metodo();
?>