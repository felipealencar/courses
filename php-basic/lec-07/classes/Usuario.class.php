<?php
    class Usuario {
        private $nomeCompleto;
        private $nomeDeUsuario;
        private $email;
        private $senha;

        public function __construct($nomeCompleto, $nomeDeUsuario, $email, $senha){
            $this->nomeCompleto = $nomeCompleto;
            $this->nomeDeUsuario = $nomeDeUsuario;
            $this->email = $email;
            $this->senha = md5($senha);
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
         * Get the value of nomeDeUsuario
         */ 
        public function getNomeDeUsuario()
        {
                return $this->nomeDeUsuario;
        }

        /**
         * Set the value of nomeDeUsuario
         *
         * @return  self
         */ 
        public function setNomeDeUsuario($nomeDeUsuario)
        {
                $this->nomeDeUsuario = $nomeDeUsuario;

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

        public function salvar(){
            $sql = "INSERT INTO usuario (
                nome_usuario,
                senha,
                email,
                nome_completo) VALUES (
                :nome_usuario,
                :senha,
                :email,
                :nome_completo)";
            $conexao = Database::getInstancia();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome_usuario", $this->getNomeDeUsuario());
            $stmt->bindValue(":senha", $this->getSenha());
            $stmt->bindValue(":email", $this->getEmail());
            $stmt->bindValue(":nome_completo", $this->getNomeCompleto());
            return $stmt->execute();
        }

        public function login(){
            $sql = "SELECT * FROM usuario WHERE (nome_usuario = :nome_usuario AND senha = :senha)";
            $conexao = Database::getInstancia();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue("nome_usuario", $this->nomeDeUsuario);
            $stmt->bindValue(":senha", $this->getSenha());
            $stmt->execute();
            return $stmt->fetch();
        }

        public static function listarTodos(){
            $sql = "SELECT * FROM usuario";
            $conexao = Database::getInstancia();
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }


    }
?>