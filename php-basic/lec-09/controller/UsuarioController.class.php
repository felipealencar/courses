<?php
require_once 'model/Usuario.class.php';

class UsuarioController {
    
    public function listar(){
        $usuario = new Usuario();
        $_REQUEST['usuarios'] = $usuario->listarTodos();
		
        require_once 'view/Usuario.view.php';
    }
}