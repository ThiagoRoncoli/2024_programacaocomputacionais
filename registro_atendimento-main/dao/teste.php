<?php

require ("clsConexao.php");
require ("../model/clsFormaatendimento.php");
require ("clsFormaatendiemntoDAO.php");

$atendimento = new FormaatendimentoModel('instsa');
$dao = new Formaatendimento();
$dao->inserir($atendimento);