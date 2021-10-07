<?php
namespace Controller;

use Model\Usuario as Usuario;
use Model\UsuarioDAO as UsuarioDAO;

class UsuariosController extends Controller{
    
    function __construct(){
    }

    function listar(){
        $usuarioDao = new UsuarioDAO();
        print_r($usuarioDao->select("usuarios", '', ''));
    }

    function inserir(){
        $acao = $_POST['acao'];
        if($acao){
            $usuario = new Usuario(array_values($_POST));
            
        } else {
            include(DIRETORIO_BASE . "View/usuarios/inserir.php");
        }
    }
}
?>