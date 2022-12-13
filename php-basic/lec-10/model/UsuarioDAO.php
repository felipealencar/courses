<?php
//Inclui as classes
require_once "DAO.php";
 
class UsuarioDAO extends DAO{
    private $database;
    private $tableName = 'usuarios';

    function __construct(){
        parent::__construct($this->database);
        parent::setTableName($this->tableName);
    }
}
?>