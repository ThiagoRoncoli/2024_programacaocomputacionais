<?php

include_once("../dao/clsConexao.php");
include_once("../dao/clsUsuarioDAO.php");
include_once("../model/clsUsuario.php");

//INSERIR USUARIO

if(isset($_REQUEST["inserir"])){
    $nome = $_POST["nomeUsuario"];
    $email = $_POST["emailUsuario"];
    $senha =  $_POST["senha"];
    $cargo = $_POST["cargoUsuario"];
    $ativo = $_POST["ativo"];
    
    if(strlen($nome) == 0 ){
        header("Location: ../cadastra.php?nomeVazio");
    }else{
        $usuario = new Usuario($nome, $email, $senha, $cargo, $ativo);
        UsuarioDAO:: inserir($usuario);
        header("Location: ../cadastra.php?nome=$nome");
    }
}

// EXCLUIR USUARIO

if(isset($_REQUEST["excluir"]) && isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    UsuarioDAO:: excluir($id);
    header("Location: ../cadastra.php?usuarioExcluido");
}


// EDITAR USUARIO

if( isset( $_REQUEST["editar"] ) &&  isset( $_REQUEST["id"] ) ){
    $nome = $_POST["nome"];
    $id = $_REQUEST["id"];
    UsuarioDAO::editar( $nome, $id );
    header( "Location: ../cadastra.php?usuarioEditado");
}