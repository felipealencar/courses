<?php
// Classes no mesmo arquivo apenas para fins de simplificação didática!
class Autorizacao{
    public function autorizar(Usuario $usuario, $acao){
        return true;
    }
}

class AutorizacaoApi extends Autorizacao{
    public function autorizar(Usuario $usuario, $acao){
        return ['ok' => false, 'status' => 404, 'message' => 'Not found'];
    }
}

$autorizacao = new Autorizacao;
$autorizacaoApi = new AutorizacaoApi;

if ($autorizacao->autorizar($usuario, 'categories/create')) {
    // autoriza se for true
}

if ($autorizacaoApi->autorizar($usuario, 'categories/create')) {
    // também autoriza, mesmo quando não devia: 'ok' => false.
}