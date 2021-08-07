<?php
    class Database{
        private $conexao = null;
        
        public function __construct(){
            try{
                $this->conexao = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_DATABASE_NAME, DB_USER, DB_PASSWORD);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public function select($query){
            try{
                $stmt = $this->conexao->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll();
                // retorna um vetor/array
                return $result;
            } catch (Exception $e){
                throw new Exception($e->getMessage());
            }
        }
    }
?>