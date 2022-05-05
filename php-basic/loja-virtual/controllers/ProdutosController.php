<?php
require_once 'model/Produto.php';
require_once 'model/ProdutoDAO.php';

class ProdutosController{
    private $produto;
    private $produtoDao;

    public function store(){
        $this->produtoDao = new ProdutoDAO();
        $this->produto = new Produto();
        $this->produto->setNome($_REQUEST['nome']);
        $this->produto->setCaminho_imagem($_REQUEST['caminho_imagem']);
        $this->produto->setDescricao($_REQUEST['descricao']);
        $this->produto->setQuantidade($_REQUEST['quantidade']);
        $this->produto->setPreco($_REQUEST['preco']);
        $this->produto->setCategorias($_REQUEST['categorias']);
        $this->produto->setNcm($_REQUEST['ncm']);
        if($this->produtoDao->store($this->produto)){
            $_REQUEST['sucesso'] = true;
            require_once 'view/produto.php';
        }

    }
}