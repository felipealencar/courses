<?php
namespace Controller;

use Model\Conexao;

class Controller {
    private $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
        return $this->conexao;
    }
    
    public function view($nomeDaView){
        include $some_path . '/' . $view_name . '.php';
     }
}