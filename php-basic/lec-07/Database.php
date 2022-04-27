<?php
class Database{
    private $username = "root";
    private $password = "";
    private $conexao;
    
    function Database(){
        $this->conexao = new PDO('mysql:host=localhost;dbname=si_pweb', $this->username, $this->password);
    }

    function getConexao(){
        return $this->conexao;
    }
}