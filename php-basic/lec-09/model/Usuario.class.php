<?php
require_once 'Database.class.php';

    class Usuario {
        private $nomeUsuario;
        private $nomeCompleto;
        private $email;
        private $senha;

        private $conexao;

        function __construct(){
            $Database = new Database();
            $this->conexao = $Database->getConexao();
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of nomeCompleto
         */ 
        public function getNomeCompleto()
        {
                return $this->nomeCompleto;
        }

        /**
         * Set the value of nomeCompleto
         *
         * @return  self
         */ 
        public function setNomeCompleto($nomeCompleto)
        {
                $this->nomeCompleto = $nomeCompleto;

                return $this;
        }

        /**
         * Get the value of nomeUsuario
         */ 
        public function getNomeUsuario()
        {
                return $this->nomeUsuario;
        }

        /**
         * Set the value of nomeUsuario
         *
         * @return  self
         */ 
        public function setNomeUsuario($nomeUsuario)
        {
                $this->nomeUsuario = $nomeUsuario;

                return $this;
        }

        public static function listarTodos(){
            $sql = "SELECT nome_usuario as nomeUsuario, nome_completo as nomeCompleto, email FROM usuarios";
            $conexao = Database::getInstancia();
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        }

    }
?>