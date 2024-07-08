<?php

//array associativo

$produtos = array(

    "EL1241" => "Celular Samsung m23",
    "COZ0345" => "Coocktoop de indução - 110v",
    "MO5423" => "Sofá 3 lugares cinza",
    "PAN7845" => "Jogo de panelas Tramontina"

);


echo $produtos['PAN7845'];

echo " <h1 style = ' color: blue;'> <br><br> DATA COMPLETA COM ARRAY ASSOCIATIVO </h1> <br><br>";

$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terça-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado');  

    $s = date('D');
    $d = date('d');
    $y = date('Y');

    echo "Bom Dia! ";
    echo "Hoje é ";
    echo $semana[$s];
    echo " " . $d . " de ";
    echo "mes";
    echo " de " . $y . ".";

?>