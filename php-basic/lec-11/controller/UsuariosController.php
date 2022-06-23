<?php
require_once "model/database/IDatabase.php";
require_once "model/database/MySQLDatabase.php";
require_once 'model/Usuario.php';
require_once 'model/UsuarioDAO.php';

class UsuariosController {
    private $database; 

    public function listar(){
        $this->database = new MySQLDatabase();
        $usuarioDAO = new UsuarioDAO($this->database);
        $usuarios = $usuarioDAO->select("*", null);
        $_REQUEST['usuarios'] = $usuarios;
        require_once 'view/Usuario.php';
    }
}