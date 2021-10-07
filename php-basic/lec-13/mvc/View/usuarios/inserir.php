<html>
    <head>

    </head>
    <body>
        <a href="#janela1" rel="modal">Novo Usuario</a>
        <div class="window" id="janela1">
                <a href="#" class="fechar">X Fechar</a>
                <h4>Cadastro de usuario</h4>
                <form id="cadUsuario" action="../../index.php?class=Usuarios&metodo=inserir" method="post">
                    <label>Nome:</label><input type="text" name="nome" id="nome" />
                    <label>Email:</label><input type="text" name="email" id="email" />
                    <label>Senha:</label> <input type="text" name="senha" id="senha" />
                    <br/><br/>
                    <input type="hidden" name="acao" id="acao" value="inserir" />
                    <input type="submit" value="Salvar" id="salvar" />
                </form>
            </div>
    </body>
</html>
        
