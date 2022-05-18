<?php
class BaseController {

    public function __call($name, $arguments){
        $this->sendOutput('', array('HTTP/1.1 404 Não encontrado.'));
    }

    public function getUriSegments(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode('/', $uri);
        return $uri;
    }

    public function getQueryStringParams(){
        return parse_url($_SERVER['QUERY_STRING']);
    }

    public function sendOutput($data, $httpHeader){
        header_remove('Set-Cookie');

        if(is_array($httpHeader)){
            foreach($httpHeader as $head){
                header($head);
            }
        }

        echo $data;
    }
}