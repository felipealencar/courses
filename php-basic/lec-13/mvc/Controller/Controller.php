<?php
namespace Controller;

class Controller {
    public function view($nomeDaView){
        include $some_path . '/' . $view_name . '.php';
     }
}