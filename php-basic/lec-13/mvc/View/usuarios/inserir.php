<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulário de usuário</title>
        <link rel="stylesheet" href="../estilo.css" type="text/css"/>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
        </script>

    </head>
    <body>
        <a href="#janela1" rel="modal">Novo Usuário</a>
        <div class="window" id="janela1">
            <a href="#" class="fechar">X Fechar</a>
            <h4>Cadastro de usuario</h4>
            <form id="cadastro-usuario" action="" method="post">
                <label>Nome:</label><input type="text" name="usuario[nome]" id="nome" />
                <label>Email:</label><input type="text" name="usuario[email]" id="email" />
                <label>Senha:</label> <input type="text" name="usuario[senha]" id="senha" />
                <input type="hidden" name="acao" id="acao" value="inserir" />
                <br/><br/>
                <input type="submit" value="Salvar" id="salvar" />
            </form>
        </div>
        <div id="table">
            <table>
                <tr>
                    <th>Id</th> 
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
                <?php
                    $usuarios = $_REQUEST['usuarios'];
                    //Enquanto existir usuários na lista, insere uma nova linha e exibe os dados
                    foreach ($usuarios as $row) {
                        $id = $row['id_usuario'];
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
    </body>
    <script>
        $(document).ready(function() {
            // Quando usuário clicar em salvar será feito todos os passos abaixo
            $('#salvar').click(function() {

                var dados = $('#cadastro-usuario').serialize();

                $.ajax({
                        type: 'POST',
                        //dataType: 'json',
                        url: 'index.php?class=Usuarios&metodo=inserir',
                        async: true,
                        data: dados,
                        success: function(response) {
                            console.log(response);
                            location.reload();
                        },
                        error: function(req, err){ console.log('Mensagem:' + err); }
                });

                return false;
            });

            $("a[rel=modal]").click(function(ev) {
                ev.preventDefault();

                var id = $(this).attr("href"); //id = #janela1

                var alturaTela = $(document).height();
                var larguraTela = $(window).width();

                // Colocando o fundo preto
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
</html>
        
