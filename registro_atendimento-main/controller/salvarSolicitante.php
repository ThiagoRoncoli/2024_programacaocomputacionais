<?php

include_once("../dao/clsConexao.php");
include_once("../dao/SolicitanteDAO.php");
include_once("../model/clsSolicitante.php");

//INSERIR solicitante

if(isset($_REQUEST["inserir"])){
    $tipo_pessoa = $_POST["tipoPessoa"];
    $tipo_solicitane = $_POST["tipoSolicitante"];
    $identificador_unico = $_POST["identificadorUnico"];
    $forma_atendimento = $_POST["formaAtendimento"];
    $nome = $_POST["nomeSolicitante"];
    $email = $_POST["emailSolicitante"];
    $telefone = $_POST["telefoneSolicitante"];
    $tipo_informacao = $_POST["tipoInformacao"];
    $descricao = $_POST["descricaoAtividade"];
    $ativo = $_POST["ativo"];
    
    if(strlen($nome) == 0 ){
        header("Location: ../cadastra.php?nomeVazio");
    }else{
        $solicitante = new Solicitante($tipo_pessoa, $tipo_solicitane, $identificador_unico,
        $forma_atendimento, $nome, $email, $telefone, $tipo_informacao, $descricao, $ativo);
        SolicitanteDAO:: inserir($solicitante);
        header("Location: ../cadastra.php?nome=$nome");
    }
}

// EXCLUIR solicitante

if(isset($_REQUEST["excluir"]) && isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    SolicitanteDAO:: excluir($id);
    header("Location: ../cadastra.php?solicitanteExcluido");
}


// EDITAR solicitante

if( isset( $_REQUEST["editar"] ) &&  isset( $_REQUEST["identificador_unico"] ) ){
    $solicitante = new Solicitante($_POST["tipoPessoa"],  $_POST["tipoSolicitante"], 
    $_REQUEST["identificador_unico"]);
    SolicitanteDAO::editar($solicitante);
    header( "Location: ../cadastra.php?solicitanteEditado");
}