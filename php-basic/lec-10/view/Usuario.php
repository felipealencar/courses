<?php
    $usuarios = $_REQUEST['usuarios'];
    print_r($usuarios);
?>
<html>
    <body>
        <table>
            <tr>
                <th>Nome de Usuário</th>
                <th>Nome Completo</th>
                <th>Email</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->nomeCompleto;?></td>
                <td><?php echo $usuario->nomeUsuario;?></td>
                <td><?php echo $usuario->email;?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>