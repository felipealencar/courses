<?php
/*
 * Melhor prática usando Prepared Statements
 */
$username = "root";
$password = "";
$usuario = 'teste';

try {
    $conn = new PDO('mysql:host=localhost;dbname=pweb', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE nome_usuario = :usuario');
    $stmt->bindParam(':usuario', $usuario, PDO::PARAM_INT);
	$stmt->execute();

    $result = $stmt->fetchAll();

	if ( count($result) ) {
		foreach($result as $row) {
		  print_r($row);
		}
	  } else {
		echo "Nenhum resultado retornado.";
	  }
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
?>