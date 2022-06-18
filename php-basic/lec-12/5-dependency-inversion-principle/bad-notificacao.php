<?php
class Email{
    public function enviar($mensagem){
        //lógica
    }
}

class Notificacao{
    public function __construct(){
        $this->mensagem = new Email();
    }

    public function enviar($mensagem){
        $this->mensagem->enviar($mensagem);
    }
}