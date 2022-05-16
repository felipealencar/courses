<?php
//Inclui as classes
require_once "database/IDatabase.php";
require_once "database/MySQLDatabase.php";
require_once "DAO.php";
 
class UsuarioDAO extends DAO{
    private $database;
    private $tableName = 'usuarios';

    function __construct(){
        $this->database = new MySQLDatabase();
        parent::__construct($this->database);
        parent::setTableName($this->tableName);
    }
}
?>