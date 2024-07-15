<?php

class Atendimento {

    public $tipo  , $idUsuario , $informacao, $data_registro;
   

  public function __construct($tipo = NULL, $informacao = NULL, $nomePublico = NULL,
  $data_registro = NULL){

    $this->$tipo = $tipo;
    $this->$informacao = $informacao;
    $this->$nomePublico = $nomePublico;
    $this->$data_registro = $data_registro;
}

};