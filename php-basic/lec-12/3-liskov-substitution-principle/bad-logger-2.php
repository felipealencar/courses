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
        if (empty($this->database) || !$this->database->isConnected()) {
            // exceção que não existe na classe-mãe
            throw new DbConnectionError; 
        }
        $this->database->insert('log', ['message' => $mensagem]);
    }
}

$fileLogger->log('Não foi possível enviar o pedido.');
# true

$databaseLogger->log('Não foi possível enviar o pedido.');
# PHP Warning: Uncaught exception 'DbConnectionError'