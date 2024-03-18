<?php


$carros = array("doblo","renegade", 20);

foreach ($carros as $car) {
    print ($car . "<br>");
}

echo "Meu carro é: $carros[$i] <hr>";


print_r($carros);
echo "<hr>";

var_dump($carros);

$carros[0] = "uno";
echo "<hr>";

var_dump($carros);

?>