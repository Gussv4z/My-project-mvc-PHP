<?php

    class ControllerLogin{
        private $post;

        public function __construct($post){
            $this->post = $post;
        }

        public function exibirUser(){
            if(isset($this->post['name'])){
                $userName = $this->post['name'];
                $userPass = $this->post['password'];
                $user = [
                    "name" => $userName,
                    "password" =>$userPass
                ];
                require_once __DIR__ . "/../model/modeLogin.php";

                $responseValidate = new ModeLogin($user);
                
                if($responseValidate->validateUser()){
                    header("Location: /filmes");
                    exit;
                } else {
                    echo '<h2 style="color:red; font-family:sans-serif">caracteres insuficientes</h2>';
                }
            }
            
        }
        static public function renderizarView(){
            require __DIR__ . "/../views/viewLogin.php";
        }
    }

?>