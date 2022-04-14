<?php
namespace Model;

class UsuarioDAO extends DAO{
    private $conexao;

    public function __construct(Conexao $conexao){
        parent::__construct($conexao);
    }
    public function insert($table = 'usuarios', $usuario){
        $sql = "INSERT INTO {$table} (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':email', $usuario->getEmail());
        $stmt->bindParam(':senha', $usuario->getSenha());
        $stmt->execute();
    }
}

?>