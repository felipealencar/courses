<html>
    <?php
        if($_REQUEST)
            if($_REQUEST['sucesso'] == true)
                echo "Produto inserido com sucesso";
    ?>
    <h1>Cadastrar Produto</h1>
    <form action="../index.php?classe=Produtos&acao=store" method="POST">
        Nome: <input name="nome"></input><br>
        Descrição: <input name="descricao"></input><br>
        Categorias: <input name="categorias"></input><br>
        Quantidade: <input name="quantidade"></input><br>
        Preço: <input name="preco"></input><br>
        NCM: <input name="ncm"></input><br>
        Imagem: <input name="caminho_imagem"></input><br>
        <input type="submit"/>
    </form>
</html>