<?php
 
class MySQLDatabase implements IDatabase{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "pweb";
    private $conexao;
    private $tableName;

	public function __construct($host = null, $user = null, $password = null, $dbname = null){
        $this->connect();
	}
	 
	public function connect(){
        $this->conexao = new PDO("mysql:host=$this->host; 
                                    dbname=$this->dbname", 
                                    $this->user, 
                                    $this->password);
	}
	 
	public function insert($data){
	//Implementação do Insert usando MySQL
	}

    public function update($data, $where){
    //Implementação do update usando MySQL
    }
         
    public function select($columns='*', array $filters=null, $object=null){
        $sql = "SELECT $columns FROM $this->tableName";
        $sql .= $filters ? " WHERE $filters" : "";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($where){
    //Implementação do DELETE usando MySQL
    }
        
    public function close(){
    //Fecha a conexão
    }
        
    public function setTableName($name){
        //define nome da tabela
        $this->tableName = $name;
    }
}
?>