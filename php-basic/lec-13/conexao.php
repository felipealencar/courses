<?php
//conexão com o servidor
$connect = mysqli_connect("localhost", "root", "");

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$connect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

// Caso a conexão seja aprovada, então conecta o Banco de Dados.
$db = mysqli_select_db($connect, "pweb");
/*Configurando este arquivo, depois é só você dar um include em suas paginas php,
isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
você altera somente um arquivo*/
?>