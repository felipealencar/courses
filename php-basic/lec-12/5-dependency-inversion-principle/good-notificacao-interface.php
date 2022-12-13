<?php
interface MensagemInterface{
    public function enviar($mensagem);
}
class Email implements MensagemInterface{
    public function enviar($mensagem){
        //lógica
    }
}
class Notificacao{
    public function __construct(MensagemInterface $mensagem){
        $this->mensagem = $mensagem;
    }

    public function enviar($mensagem){
        $this->mensagem->enviar($mensagem);
    }
}