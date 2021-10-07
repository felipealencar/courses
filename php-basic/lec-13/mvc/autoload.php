<?php
define('DIRETORIO_BASE', realpath(dirname(__FILE__)));

function autoloader($namespace) {
    $namespace = str_replace("\\","/",$namespace);
    $caminhoAbsoluto = __DIR__ . "/". $namespace . ".php";
    return include_once $caminhoAbsoluto;
}

spl_autoload_register(__NAMESPACE__ . "\autoloader");
?>