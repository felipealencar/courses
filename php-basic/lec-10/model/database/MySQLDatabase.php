<?php
 
class MySQLDatabase implements IDatabase{
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $dbname = "pweb";
    private $conexao;
    private $tableName;

	public function __construct($host = null, $user = null, $password = null, $dbname = null){
        $this->create();
        $this->connect();
	}
	 
    public function create(){
        $pdo = new PDO("mysql:host=$this->host", $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("CREATE DATABASE IF NOT EXISTS $this->dbname");
        $pdo->query("use $this->dbname");
    }

	public function connect(){
        $this->conexao = new PDO("mysql:host=$this->host; 
                                    dbname=$this->dbname", 
                                    $this->user, 
                                    $this->password);
        $this->conexao->setAttribute( PDO::ATTR_CASE, PDO::CASE_NATURAL );
	}
	 
	public function insert($data){
	//Implementação do Insert usando MySQL
	}

    public function update($data, $where){
    //Implementação do update usando MySQL
    }
         
    public function select($columns='*', array $filters=null){
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