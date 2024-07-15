<?php

require_once("../dao/clsConexao.php");
require_once("../dao/SolicitanteDAO.php");
require_once("../model/clsSolicitante.php");

//INSERIR solicitante

if(isset($_REQUEST["inserir"])){
    $nome_solicitante = $_REQUEST["identificacaoAtendente"];
    //$tipo_pessoa = $_POST["tipoPessoa"];
    $tipo_solicitante = $_REQUEST["pessoasAtendimento"];
    //$identificador_unico = $_POST["identificadorUnico"];
    $forma_atendimento = $_REQUEST["tipoAtendimento"];
    //$nomePublico = $_POST["nomePublico"];
    //$emailSolicitante = $_POST["emailSolicitante"];
    //$telefoneSolicitante = $_POST["telefoneSolicitante"];
    //$tipo_informacao = $_POST["tipoInformacao"];
    //$descricaoAtividade = $_POST["descricaoAtividade"];
    //$ativo = $_POST["ativo"];
    
    //var_dump($_REQUEST); exit();
    
        $solicitante = new Solicitante($nome_solicitante, $tipo_solicitante, 
        $forma_atendimento);
        SolicitanteDAO::inserir($solicitante);
    
    /*if(isset($tipoSolicitante) == "trabalhador"){
        header("Location: ../trabalhador.php");

    }else if(isset($tipoSolicitante) == "empregador"){
        header("Location: ../empregador.php");

    }else if(isset($tipoSolicitante) == "ads"){
        header("Location: ../tipo_atendimento.php");

    }else if(isset($tipoSolicitante) == "setores"){
        header("Location: ../tipo_atendimento.php");

    }else if(isset($tipoSolicitante) == "mercadoTrabalho"){
        header("Location: ../mercado_trabalho.php");

    }else if(isset($tipoSolicitante) == "outro"){
        header("Location: ../identificacao.php");
    }*/

}



// EXCLUIR solicitante

if(isset($_REQUEST["excluir"]) && isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    SolicitanteDAO:: excluir($id);
    header("Location: ../home.php?solicitanteExcluido");
}


// EDITAR solicitante

if( isset( $_REQUEST["editar"] ) &&  isset( $_REQUEST["identificador_unico"] ) ){
    $solicitante = new Solicitante($_POST["tipoPessoa"],  $_POST["tipoSolicitante"], 
    $_REQUEST["identificador_unico"]);
    SolicitanteDAO::editar($solicitante);
    header( "Location: ../home.php?solicitanteEditado");
}