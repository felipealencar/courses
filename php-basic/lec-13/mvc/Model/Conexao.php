<?php
namespace Model;

class Conexao {
    private $host = HOST;
    private $nomeBanco = NOME_BANCO;
    private $usuario = USUARIO;
    private $senha = SENHA;
    private $conexao;

    public function __construct(){
        $this->conexao = new \PDO("mysql:host=$this->host;dbname=$this->nomeBanco", $this->usuario, $this->senha);
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->conexao->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        return $this->conexao;
    }

    public function getConexao(){
        return $this->conexao;
    }
}