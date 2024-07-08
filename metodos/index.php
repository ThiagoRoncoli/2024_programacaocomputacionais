<?php

// método que recebe parâmetro e tem retorno
function somar($x , $y){
    return $x + $y;

}

// método que não recebe parâmetro e não tem retorno
function imprimirMeuNome (){
    echo "Thiago";
}

// método que não recebe parâmetro e tem retorno
function getPI(){
    return 3.14;
}

// método que recebe parâmetro e não tem retorno
function imprimirAreaCirculo ($raio){
    $area = getPI() * ($raio * $raio);
echo "<br>Área do Círculo com raio $raio é: " .$area;
}


imprimirMeuNome();

if( isset ($_GET["x"])){
    $V1 = $_GET["x"];
}else{
$v1 = 0;
    }

if( isset ($_GET["y"])){
        $V2 = $_GET["y"];
    }else{
    $v2 = 0;
        }


isset ($_GET["r"]) ? $raio = $_GET["r"] : $raio = 0;



$v1 = $_GET ["x"];
$v2 = $_GET ["y"];
$raio = $_GET ["r"];
$result = somar ( $v1 , $v2);
//$result = somar ( 5 , 10);
echo "<br>Resultado: " . $result;

echo "<hr> Valor do PI: " .getPI();
imprimirAreaCirculo( $raio );
imprimirAreaCirculo(10);
?>