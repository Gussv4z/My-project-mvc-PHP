<?php

    class Router{
        private $url;
        private $segments;
        private $actual;

        public function __construct($url, $segments){
            $this->url = $url;
            $this->segments = $segments;
            $this->actual = $segments[0];
        }

        public function redirect(){
            if(empty($this->actual)){
                header("Location: /login");
            };
        }


        public function dispatch(){
            if($this->segments[0] == "login"){
                require_once "./controller/controllerLogin.php";
                $controllerLogin = new ControllerLogin($_POST);
                ControllerLogin::renderizarView();
                $controllerLogin->exibirUser();
            }

            if($this->segments[0] == "filmes"){
                require_once __DIR__ . "/./controller/controllerFilmes.php";
                
                $controllerFilmes = new ControllerFilmes($_POST);
                $controllerFilmes->consultFilme();
                ControllerFilmes::exibirView();
            }
        }
    }
