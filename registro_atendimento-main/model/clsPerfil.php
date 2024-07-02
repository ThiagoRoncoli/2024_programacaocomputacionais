<?php

class perfil {

    public $idPerfil  , $nomePerfil , $ativo;

  public function __construct(   $idPerfil =  NULL , $nomePerfil =  NULL, $ativo = NULL){

    $this->$idPerfil = $idPerfil;
    $this->$nomePerfil = $nomePerfil;
    $this->ativo = $ativo;             
}

};