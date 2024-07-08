<?php

include_once("clsBicicleta.php");
include_once("clsMountainBike.php");
include_once("clsBicicetaEletrica.php");

$bicicleta = new Bicicleta("Minha <strong> Bike-001</strong> <br>" , "<strong> Caloi </strong><br>" , " <strong>Azul</strong><br>");

echo $bicicleta->getId() . " da marca" .
$bicicleta->getMarca() . " e da cor" .
$bicicleta->getCor();
$bicicleta->andar();

$mountainbike  = new MoutainBike(" <strong>Mountain</strong>", "<strong> Sundown</strong>", " <strong>Preta</strong>","<strong> " . 1 . "</strong>");

echo "Estou andando na minha" . $mountainbike->getId() ." da marca" . $mountainbike->getMarca() .
"<br>" .  "da cor" . $mountainbike->getCor() . "<br>" . " na marcha" . $mountainbike->getMarcha();

$mountainbike->andar();
$mountainbike->mudarMarcha(3);
$mountainbike->frear();

$bicicletaEletrica = new BicicletaEletrica("Eletrica", "Honda", "Vermelha", false , 20);
$bicicletaEletrica->ligar();
$bicicletaEletrica->andar();
$bicicletaEletrica->frear();
$bicicletaEletrica->carregar(50);
$bicicletaEletrica->andar();

?>