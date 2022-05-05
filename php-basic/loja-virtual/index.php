<?php
$classe = $_GET['classe'];
$metodo = $_GET['acao'];

$classe .= 'Controller';

require_once 'controllers/'.$classe.'.php';

$objeto = new $classe();
$objeto->$metodo();
?>