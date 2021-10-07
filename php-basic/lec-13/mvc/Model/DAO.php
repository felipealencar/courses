<?php
namespace Model;

class DAO extends Conexao {
    private $conexao;

    public function __construct(Conexao $conexao){
        $this->conexao = $conexao->getConexao();
    }

    public function insert($table, $data){
        foreach($data as $column => $value){
            $sql = "INSERT INTO {$table} ({$column}) VALUES (:{$column});";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute(array(':'.$column => $value));
        }
        $stmt->execute($data);
    }

    public function select($table, $where='', $other=''){
        if($where != '' ){
            $where = 'WHERE ' . $where;
        }
        $sql = "SELECT * FROM  ".$table." " .$where. " " .$other;
        $select = $this->conexao->prepare($sql) or die($this->conexao);
        $select->execute();
        $select->setFetchMode(\PDO::FETCH_ASSOC);
               
        return $select->fetchAll();
     }
}