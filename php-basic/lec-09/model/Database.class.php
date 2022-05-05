<?php
class Database{
    public static $conexao = null;

    public function __construct(){}

    public function getInstancia(){
        if(!isset(self::$conexao)){
            self::$conexao = new PDO('mysql:host=localhost; dbname=pweb', 'root', '');
        }

        return self::$conexao;
    }
}