<?php
$class = $_GET['class'];
$metodo = $_GET['metodo'];

$class .= 'Controller';

require_once 'controller/'.$class.'.class.php';
$objeto = new $class();
$objeto->$metodo();
?>
