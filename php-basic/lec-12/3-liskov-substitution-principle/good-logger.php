<?php
// Classes no mesmo arquivo apenas para fins de simplificação didática!
class Logger{
    public function writer($message){
    //lógica
    }
}

class DatabaseLogger extends Logger{
    public function __construct(DataBase $database){
        $this->database = $database;
    }

    public function writer($message){
    //lógica
    }
}

class FileLogger extends Logger{
    public function __construct(FileManager $fileManager){
        $this->fileManager = $fileManager;
    }

    public function writer($message){
    //lógica
    }
}

$logger = new FileLogger($fileManager);
$logger->write('meu log');

$logger = new DatabaseLogger($database);
$logger->write('meu log');