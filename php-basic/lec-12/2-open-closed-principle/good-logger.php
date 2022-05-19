<?php
// Classes e interface no mesmo arquivo apenas para fins de simplificação didática!
class Logger{
    private $writer;

    public function __construct(Writer $writer){
        $this->writer = $writer;
    }

    public function write($message){
        $this->writer->write($message);
    }
}

interface Writer{
    public function write($message);
}

class Txt implements Writer{
    public function write($message){
        //lógica
    }
}

class Csv implements Writer{
    public function write($message){
        //lógica
    }
}