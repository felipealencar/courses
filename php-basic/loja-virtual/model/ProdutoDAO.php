<?php
require_once 'Database.php';

class ProdutoDAO{
    private $conexao;

    function __construct(){
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    function store($produto){
        $stmt = $this->conexao->prepare("INSERT INTO produtos (nome, descricao,	preco, caminho_imagem, categorias, quantidade,ncm) VALUES (nome = :nome, descricao = :descricao, preco = :preco, caminho_imagem = :caminho_imagem, categorias = :categorias, quantidade = :quantidade, ncm = :ncm)");
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':categorias', $produto->getCategorias());
        $stmt->bindValue(':preco', $produto->getPreco());
        $stmt->bindValue(':caminho_imagem', $produto->getCaminho_imagem());
        $stmt->bindValue(':ncm', $produto->getNcm());
        $stmt->bindValue(':quantidade', $produto->getQuantidade());
        return $stmt->execute();
    }
}