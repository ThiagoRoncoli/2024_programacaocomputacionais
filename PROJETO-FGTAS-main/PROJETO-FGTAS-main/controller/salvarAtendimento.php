<?php

require_once("../dao/clsConexaoAtendimento.php");
require_once("../dao/AtendimentoDAO.php");
require_once("../model/clsAtendimento.php");


//INSERIR ATENDIMENTO

if(isset($_REQUEST["inserir"])){
    $tipo = $_POST["tipoAtendimento"];
    $informacao = $_POST["pessoasAtendimento"];
    
    
    
        $atendimento = new Atendimento($tipo, $informacao);
        AtendimentoDAO::inserir($atendimento);

    }if(isset($tipo) == "carteira_trabalho"){
        header("Location: ../carteira_trabalho.php");

    }else if(isset($tipo) == "vida_centro_humanistico"){
        header("Location: ../centro_humanistico.php");

    }else if(isset($tipo) == "informacoes_mercado_trabalho"){
        header("Location: ../mercado_trabalho.php");
    }





// EXCLUIR atendimento

if(isset($_REQUEST["excluir"]) && isset($_REQUEST["tipo"])){
    $tipo = $_REQUEST["tipoAtendimento"];
    AtendimentoDAO::excluir($tipo);
    header("Location: ../home.php?atendimentoExcluido");
}


// EDITAR atendimento

if( isset( $_REQUEST["editar"] ) &&  isset( $_REQUEST["tipo"] ) ){
    $tipo = $_POST["tipoAtendimento"];
    AtendimentoDAO::editar( $tipo );
    header( "Location: ../home.php?atendimentoEditado");
}