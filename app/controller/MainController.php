<?php

class MainController {

    public function home(){
        return $this->show('home');
    }

    public function experience(){
        return $this->show('experience');
    }

    public function portfolio(){
        return $this->show('portfolio');
    }

    public function diplome(){
        return $this->show('diplome');
    }

    public function contact(){
        return $this->show('contact');
    }

    public function error404(){
        return $this->show('error');
    }

    protected function show($template){

        require_once __DIR__.'../../views/layout/header.tpl.php';
        require_once __DIR__.'../../views/mainPages/'.$template.'.tpl.php';
        require_once __DIR__.'../../views/layout/footer.tpl.php';
    }
}