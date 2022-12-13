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
            <?php foreach ($usuarios as $row): ?>
            <tr>
                <td><?=$row['nome_usuario']?></td>
                <td><?=$row['nome_completo']?></td>
                <td><?=$row['email']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>