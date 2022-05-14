<?php
    require_once 'server.php';
    class interfaceSoap {
        public function somar($n1, $n2){
            return $n1+$n2;
        }
    }

    $server->setObject(new interfaceSoap());
    $server->handle();
?>