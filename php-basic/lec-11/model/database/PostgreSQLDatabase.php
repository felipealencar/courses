<?php
 
class PostgreSQLDatabase implements IDatabase {
 
	public function __construct($host, $user, $pass, $dbname){
	
	}
	 
	public function connect(){
	//Implementa a conexão
	}
	 
	public function insert($data){
	//Implementação do Insert usando MySQL
	}

    public function update($data, $where){
    //Implementação do update usando MySQL
    }
         
    public function select($columns='*', array $filters=null){
    //Implementação do SELECT usando MySQL
    }
    public function delete($where){
    //Implementação do DELETE usando MySQL
    }
        
    public function close(){
    //Fecha a conexão
    }
        
    public function setTableName($name){
    //define nome da tabela
    }
}
?>