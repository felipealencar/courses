<?php
class Usuario{
    public $nomeUsuario;
    public $nomeCompleto;
    public $email;
    public $senha;

    function __construct(){}

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;

        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    public function getNomeCompleto(){
        return $this->nomeCompleto;
    }

    public function setNomeCompleto($nomeCompleto){
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
        return $this;
    }
}
