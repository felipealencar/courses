<?php
include_once 'autoload.php';

class AcessaUsuario{
	function imprimeUsuario(){
		$usuario = new Usuario();
		echo $usuario->nome;
		echo $usuario->getCpf();
		echo $usuario->getEndereco();
	}
}

$acessaUsuario = new AcessaUsuario();
$acessaUsuario->imprimeUsuario();
?>