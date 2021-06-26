<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "si_pweb";
	
	$connection = new mysqli($server, $username, $password, $database);
	
	if($connection->connect_error){
		die("Conexão falhou ".$connection->connect_error);
	} else {
		echo "Conexão realizada.";
		if($_REQUEST){
			$nomeDeUsuario = $_POST["user"];
			$email = $_POST["email"];
			$senha = $_POST["password"];
			
			// Apenas para fins DIDÁTICOS. Procedimento inseguro.
			// Código propenso a SQL Injection.
			$sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('$nomeDeUsuario', '$email', '$senha')";
			if($connection->query($sql)){
				echo "Usuário inserido com sucesso.";
			} else {
				echo "Erro ".$sql." ".$connection->error;
			}
		}
	}
?>
	