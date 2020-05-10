<?php

class MainController {

    public function home(){
        return $this->show('home');
    }

    public function error404(){
        return $this->show('error');
    }

    protected function show($template){

        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/'.$template.'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';
    }
}