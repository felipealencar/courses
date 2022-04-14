<?php
	include "conexao.php";
	$id = $_POST['id'];
	$sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";
	mysqli_query($connect, $sql);
	$response = array("success" => true);
	echo json_encode($response);
?>