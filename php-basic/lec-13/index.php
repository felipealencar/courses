<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulário de usuário</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
    </head>
    <body>
        <a href="#janela1" rel="modal">Novo Usuario</a>
        <!--        Tabela de exibição dos dados-->
        <div id="table">
            <table  border="1px" cellpadding="5px" cellspacing="0">
                <tr> <!-- <tr> -> table row -->
                    <th>Id</th> <!-- <td> -> table data -->
                    <th>Nome</th> <!-- <th> -> table header -->
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
                <?php
//precisamos chamar esta página para realizarmos as queries com o banco
                include 'conexao.php';
// Select que traz todos os usuários cadastrados no banco de dados
                $select = "SELECT * FROM USUARIO";
                $result = mysqli_query($connect, $select); //resultado do select

//Enquanto existir usuários no banco ele insere uma nova linha e exibe os dados
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['usuario_id'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    $senha = $row['senha'];
                    echo "   
                        <tr>
                            <td>$id</td>
                            <td>$nome</td>
                            <td>$email</td>
                            <td>$senha</td>
                        </tr>";
                }
                ?>
            </table>

<!-- Modal que é aberto ao clicar novo usuário-->

            <div class="window" id="janela1">
                <a href="#" class="fechar">X Fechar</a>
                <h4>Cadastro de usuario</h4>
                <form id="cadUsuario" action="" method="post">
                    <label>Nome:</label><input type="text" name="nome" id="nome" />
                    <label>Email:</label><input type="text" name="email" id="email" />
                    <label>Senha:</label> <input type="text" name="senha" id="senha" />
                    <br/><br/>
                    <input type="button" value="Salvar" id="salvar" />
                </form>
            </div>
            <div id="mascara"></div>
        </div>
    </body>
</html>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#salvar').click(function() {

            var dados = $('#cadUsuario').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'salvar.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    }
            });

            return false;
        });

//// aqui é o script para abrir o nosso pequeno modal

        $("a[rel=modal]").click(function(ev) {
            ev.preventDefault();

            var id = $(this).attr("href"); //id = #janela1

            var alturaTela = $(document).height();
            var larguraTela = $(window).width();

            //colocando o fundo preto
            $('#mascara').css({'width': larguraTela, 'height': alturaTela});
            $('#mascara').fadeIn(1000);
            $('#mascara').fadeTo("slow", 0.8);

            var left = ($(window).width() / 2) - ($(id).width() / 2);
            var top = ($(window).height() / 2) - ($(id).height() / 2);

            $(id).css({'top': top, 'left': left});
            $(id).show();
        });

        $("#mascara").click(function() {
            $(this).hide();
            $(".window").hide();
        });

        $('.fechar').click(function(ev) {
            ev.preventDefault();
            $("#mascara").hide();
            $(".window").hide();
        });

    });
</script>