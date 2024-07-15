<?php

class Solicitante {

    public $id, $nome_solicitante, $tipo_pessoa , $tipo_solicitante, $identificador_unico, 
    $forma_atendimento, $nomePublico, $emailSolicitante, $telefoneSolicitante, $tipo_informacao, $descricaoAtividade,
    $ativo, $data_registro;
   

  public function __construct( $nome_solicitante, $tipo_solicitante, $forma_atendimento){

    $this->$nome_solicitante = $nome_solicitante;
    $this->$tipo_solicitante = $tipo_solicitante;
    $this->$forma_atendimento = $forma_atendimento;

  }
  
}