<?php
    require_once "autoload.php";

    if(isset($_POST["nome_completo"])){
        $Usuario = new Usuario($_POST["nome_completo"], $_POST["nome_usuario"], $_POST["email"], $_POST["senha"]);
        if($Usuario->salvar()){
            echo "Usuário inserido.";
        } else {
            echo "Erro.";
        }
    }
?>

<html>
    <body>
        <form action="inserir.php" method="POST">
            <input name="nome_completo" placeholder="Nome Completo"/>
            <input name="nome_usuario" placeholder="Nome do Usuário"/>
            <input name="email" placeholder="E-mail"/>
            <input name="senha" placeholder="Senha"/>
            <input type="submit"/>
        </form>
    </body>
</html>