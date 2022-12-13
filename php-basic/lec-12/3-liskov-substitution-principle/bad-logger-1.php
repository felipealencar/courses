<?php
// Classes no mesmo arquivo apenas para fins de simplificação didática!
class Logger{
    public function log($mensagem){
        $this->append($mensagem);
    }
}

// sub-classe
class DatabaseLogger extends Logger{ 
    public function log($mensagem){
        $this->database->insert('log', ['message' => $mensagem]);
    }
}

$fileLogger->log('Não foi possível enviar o pedido.');
# true
$databaseLogger->log('Não foi possível enviar o pedido.');
# PHP Fatal error: Call to a member function insert() on a non-object