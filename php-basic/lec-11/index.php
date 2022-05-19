<?php
$class = $_GET['class'];
$method = $_GET['method'];

$class .= 'Controller';

require_once 'controller/'.$class.'.php';
$obj = new $class();
$obj->$method();
?>
