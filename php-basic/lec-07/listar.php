<?php
    require_once 'autoload.php';
    session_start();
    if($_SESSION["logado"]){
        $usuarios = Usuario::listarTodos();
    } else {
        header("Location: login.php");
    }
?>

<html>
    <body>
        <table>
            <tr>
                <th>Nome Completo</th>
                <th>Nome de Usuário</th>
                <th>E-mail</th>
            </tr>
            <?php  
                foreach($usuarios as $usuario){
                    echo "<tr>";
                    echo "<td>".$usuario['nome_completo']."</td>";
                    echo "<td>".$usuario['nome_usuario']."</td>";
                    echo "<td>".$usuario['email']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>