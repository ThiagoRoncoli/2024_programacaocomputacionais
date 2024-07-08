<?php

class Solicitante {

    private $id, $tipo_pessoa , $tipo_solicitane, $identificador_unico, 
    $forma_atendimento, $nome, $email, $telefone, $tipo_informacao, $descricao,
    $ativo, $data_registro;
   

  public function __construct($id = NULL, $tipo_pessoa = NULL, $tipo_solicitane = NULL,
  $identificador_unico = NULL, $forma_atendimento = NULL, $nome = NULL, $email= NULL
  , $telefone = NULL, $tipo_informacao = NULL, $descricao = NULL,
  $ativo = NULL, $data_registro = NULL){

    $this->$id = $id;
    $this->$tipo_pessoa = $tipo_pessoa;
    $this->$tipo_solicitane = $tipo_solicitane;
    $this->$identificador_unico = $identificador_unico;
    $this->$forma_atendimento = $forma_atendimento;
    $this->$nome = $nome;
    $this->$email = $email;
    $this->$telefone = $telefone;
    $this->tipo_informacao = $tipo_informacao; 
    $this->descricao = $descricao; 
    $this->ativo = $ativo; 
    $this->data_registro = $data_registro;
  }

};