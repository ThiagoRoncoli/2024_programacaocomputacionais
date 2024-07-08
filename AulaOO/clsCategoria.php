<?php

    class Categoria{
        public $nome, $id;
        
        public function __construct($nome = "Outra"){
            $this ->id = null;
            $this ->nome = $nome;
        }
    }