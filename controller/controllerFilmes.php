<?php

    include_once __DIR__ . "/../model/modelFilmes.php";
    class ControllerFilmes{
        public $post;
        private $modelFilmes;

        public function __construct($post){
            $this->post = $post;
            $this->modelFilmes = new modelFilmes();
        }

        public function consultFilme(){
            if(!empty($this->post['filmeName'])){
                $result = $this->modelFilmes->getFilmes($this->post['filmeName']);
            };
            
        }

        static public function exibirView(){
            require_once __DIR__ . "/../views/viewFilmes.php";
        }
    }

?>