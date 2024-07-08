<?php

require_once('dao/clsConexao.php');
require_once('dao/AtendimentoDAO.php');
require_once('model/clsAtendimento.php');

$atendimento1=new Atendimento('presencial', 'ola');
$dao = new AtendimentoDAO();
$dao->inserir();