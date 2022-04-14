<?php
    class Autoload {
        public function __construct(){
            spl_autoload_extensions('.class.php');
            spl_autoload_register(array($this, 'load'));
        }
        private function load($nomeDaClasse){
            $extensao = spl_autoload_extensions();
            require_once (__DIR__ . '/classes/' . $nomeDaClasse . $extensao);
        }
    }

    $autoload = new Autoload();
?>