<?php
require_once "Database.php";
require_once "Usuario.php";


function cadastrarUsuario($usuario){
    $database = new Database();
    $conexao = $database->getConexao();
    $stmt = $conexao->prepare('INSERT INTO usuarios (nome_usuario, email, password) VALUES (:nomeUsuario, :email, :senha)');
    $stmt->bindParam(':nomeUsuario', $usuario->getNomeUsuario(), PDO::PARAM_INT);
    $stmt->bindParam(':email', $usuario->getEmail(), PDO::PARAM_INT);
    $stmt->bindParam(':senha', $usuario->getSenha(), PDO::PARAM_INT);
    $stmt->debugDumpParams();
	var_dump($stmt->execute());
}


$usuario = new Usuario($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["senha"]);
cadastrarUsuario($usuario);