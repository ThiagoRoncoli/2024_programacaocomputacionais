<?php
//calculo de media
$nota1 = 9;
$nota2 = 8.4;
$nota3 = 9;
//$nota4 = 6.8;

//declaração de método
function media( $a1, $a2, $a3){
$media = ($a1 + $a2 + $a3) / 3;
echo "Média final: $media";
}

function media2($a1, $a2, $a3){
$notas = array($a1, $a2, $a3);
$soma = array_sum($notas);
$media = $soma / sizeof($notas);
echo "Média final: $media";
}

//chamada metodo
media($nota1, $nota2, $nota3);
?>

<?php
//calculo de media
$nota1 = $_POST['a1'];
$nota2 = $_POST['a2'];
$nota3 = $_POST['a3'];
$nota4 = $_POST['a4'];

function mediaPost($a1, $a2, $a3, $a4){
$notas = array($a1, $a2, $a3, $a4);
$soma = array_sum($notas);
$media = $soma / sizeof($notas);
echo "Média final: $media";
}

//chamada metodo
media($nota1, $nota2, $nota3, $nota4);
?>