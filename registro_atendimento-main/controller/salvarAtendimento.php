<?php

include_once("../dao/clsConexao.php");
include_once("../dao/AtendimentoDAO.php");
include_once("../model/clsAtendimento.php");

//INSERIR USUARIO

if(isset($_REQUEST["inserir"])){
    $tipo = $_POST["tipoAtendimento"];
    $informacao = $_POST["informacao"];
    
    
    if(strlen($tipo) == 0 ){
        header("Location: ../cadastra.php?nomeVazio");
    }else{
        $atendimento = new Atendimento($tipo, $informacao, $nomePublico, $data_registro);
        AtendimentoDAO::inserir($atendimento);
        header("Location: ../cadastra.php?tipo=$tipo");
    }
}

// EXCLUIR atendimento

if(isset($_REQUEST["excluir"]) && isset($_REQUEST["tipo"])){
    $tipo = $_REQUEST["tipoAtendimento"];
    AtendimentoDAO::excluir($tipo);
    header("Location: ../cadastra.php?atendimentoExcluido");
}


// EDITAR atendimento

if( isset( $_REQUEST["editar"] ) &&  isset( $_REQUEST["tipo"] ) ){
    $tipo = $_POST["tipoAtendimento"];
    AtendimentoDAO::editar( $tipo );
    header( "Location: ../cadastra.php?atendimentoEditado");
}