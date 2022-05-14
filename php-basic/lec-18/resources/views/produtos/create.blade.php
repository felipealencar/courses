<html>
    <body>
        <form action="" method="POST">
            @csrf
            <input type="text"name="nome" placeholder="Nome do produto"/>
            <input type="number"name="preco" placeholder="Preço do produto"/>
            <input type="number"name="quantidade" placeholder="quantidade"/>
            <button>Cadastrar</button>
        </form>
    </body>
</html>