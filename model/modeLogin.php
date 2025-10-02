<?php

    class ModeLogin{
        private $user;
        private $userPass;

        public function __construct($user){
            $this->user = $user['name'];
            $this->userPass = $user['password'];
        }

        public function validateUser(){
            if(strlen($this->user) >= 4){
                if(strlen($this->userPass) > 4){
                    echo "senha validada";
                    return true;
                }
                else{
                    echo "senha com poucos caracteres";
                }

            }
        }
    }

?>