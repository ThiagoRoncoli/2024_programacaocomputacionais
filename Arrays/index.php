<?php

//trabalhando com arrays

$numeros = array(1,2,3,4,5,6,7,8,9,10);

$num = [1,2,3,4,5,6,7,8,9];

$semana = array("domingo","segunda", "terça", "quarta", "quinta", "sexta", "sábado");

echo $semana[0];
echo "<br>";

//funções emnbutidas
echo count($numeros);
echo "<br>";
echo sizeof($semana);
echo "<br>";

//data

date_default_timezone_set("America/Sao_Paulo");

$hoje = date("w, d/m/Y - H:i:s ");
echo "hoje é $hoje";



?>