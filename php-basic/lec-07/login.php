<?php
    require_once "autoload.php";

    if(isset($_POST["nome_usuario"])){
        $Usuario = new Usuario('', $_POST["nome_usuario"], '', $_POST["senha"]);

        if($Usuario->login()){
            session_start();
            $_SESSION["logado"] = true;
            header("Location: listar.php");
        } else {
            echo "Erro.";
        }
    }
?>

<html>
    <body>
        <form action="login.php" method="POST">
            <input name="nome_usuario" placeholder="Nome do Usuário"/>
            <input name="senha" type="password" placeholder="Senha"/>
            <input type="submit"/>
        </form>
    </body>
</html>