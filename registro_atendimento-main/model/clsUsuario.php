<?php

    class Usuario{

        private $id, $nome, $email, 
        $senha, $cargo, $ativo;

        public function __construct($nome = NULL, $email = NULL, 
        $senha = NULL, $cargo = NULL, $ativo = NULL){
//o id eu posso tirar talvez//

            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->cargo = $cargo; 
            $this->ativo = $ativo;             
        }

    }