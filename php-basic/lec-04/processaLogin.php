<?php
	$user = $_REQUEST["user"];
	$password = $_REQUEST["password"];
	if($user == "admin" && $password == "123456"){
		session_start();
		$_SESSION["user"] = $user;
		$_SESSION["password"] = $password;
		echo "Usuário logado.";
?>
	<a href="exibir.php">Exibir usuário</a>
<?php
	} else {
		echo "Acesso negado.";
	}
	
?>
		