<?php
//Inclui as classes
require_once "DAO.php";
 
class UsuarioDAO extends DAO{
    private $tableName = 'usuarios';

    function __construct(IDatabase $database){
        parent::__construct($database);
        parent::setTableName($this->tableName);
    }
}
?>