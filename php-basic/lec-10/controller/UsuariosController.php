<?php
require_once 'model/Usuario.php';
require_once 'model/UsuarioDAO.php';

class UsuariosController {
    
    public function listar(){
        $usuarioDAO = new UsuarioDAO();
        $usuario = new Usuario();
        $usuarios = $usuarioDAO->select("*", null);
        $_REQUEST['usuarios'] = $usuarios;	
        require_once 'view/Usuario.php';
    }
}