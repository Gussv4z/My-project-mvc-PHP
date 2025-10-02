<?php

    class ModelFilmes{
        private $arrFilmes =[
            1 => ["title" => "Matrix", "Ano" => "1999"],
            2 => ["title" => "Duna", "Ano" => "2020"]
        ];

        public function getFilmes($busca){

            if(!empty($busca)){
                $filme = array_find($this->arrFilmes,function($filme) use ($busca){ 
                    return strtolower($filme['title']) === strtolower($busca);
                });
                return json_encode($filme);
            }
        }
    }

?>