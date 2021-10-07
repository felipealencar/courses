<?php
namespace Controller;

use Model\Usuario as Usuario;
use Model\UsuarioDAO as UsuarioDAO;

class UsuariosController extends Controller{
    private $usuario;
    private $usuarioDao;

    function __construct(){
        $conexao = parent::__construct();
        $this->usuarioDao = new UsuarioDAO($conexao);
    }

    function listar(){
        return $this->usuarioDao->select("usuarios", '', '');
    }

    function inserir(){
        if($_POST){
            $this->usuario = new Usuario($_POST['usuario']);
            $this->usuarioDao->insert("usuarios", $this->usuario);
            $response = array("success" => true);
	        echo json_encode($response);
        } else {
            $_REQUEST['usuarios'] = $this->listar();
            include(DIRETORIO_BASE . "/View/usuarios/inserir.php");
        }
    }
}
?>