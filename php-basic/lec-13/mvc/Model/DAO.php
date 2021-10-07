<?php
namespace Model;

class DAO extends Conexao {
    private $conexao;

    public function __construct(){
        $conexao = new parent();
        $this->conexao = $conexao->getConexao();
    }

    public function select($table, $where='', $other=''){
        if($where != '' ){
            $where = 'WHERE ' . $where;
        }
        $sql = "SELECT nome FROM  ".$table." " .$where. " " .$other;
        $select = $this->conexao->prepare($sql) or die($this->conexao);
        $select->execute();
        $select->setFetchMode(\PDO::FETCH_ASSOC);
               
        return $select->fetchAll();
     }
}