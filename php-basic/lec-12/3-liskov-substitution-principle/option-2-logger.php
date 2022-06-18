<?php
class DatabaseLogger extends Logger{
    public function __construct(..., Database $database){
        parent::__construct(...);

        $this->database = $database;

        if (!$this->database->isConnected()) {
            $this->database->connect();
        }
    }
}