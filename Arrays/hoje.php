<?php


date_default_timezone_set("America/Sao_Paulo");

//arrays do dia da semana

$semana = array(
                "Domingo",
                "Segunda-feira",
                "Terça-feira",
                "Quartta-feira",
                "Quinta-feira",
                "Sexta-feira",
                "Sábado"
              );

$dia_semana = date("w");

$dia = date("d");
$mes = date("n");
$ano = date("Y");

$mes_ano = array("","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho","Julho",
"Agosto","Setembro","Outubro", "Novembro", "Dezembro");

echo "Bom dia hoje é " . $semana[$dia_semana] . ", " . $dia . " de " . $mes_ano[$mes] . " de " . $ano. ".";


echo "<h1 style = ' color: green;'> <br> DATA EM INGLÊS: </h1> <br>";

echo "Good Mornig! Today is " . date ('D') . ","
. date ('d') . " of " . date ('M') . " of " . date('Y') . ".";

?>