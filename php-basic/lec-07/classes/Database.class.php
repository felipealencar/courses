<?php
    class Database {
        public static $instancia;

        public function __construct(){}

        public static function getInstancia(){
            if(!isset(self::$instancia)){
                self::$instancia = new PDO('mysql:host=localhost; dbname=pweb', 'root', '');
            }

            return self::$instancia;
        }
    }
?>