<?php
    $usuarios = $_REQUEST['usuarios'];
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
				<?php var_dump(get_class_methods($usuario)); ?>
                <td><?php echo $usuario->getNomeCompleto();?></td>
                <td><?php echo $usuario->getNomeUsuario();?></td>
                <td><?php echo $usuario->getEmail();?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>