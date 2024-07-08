<?php


require_once("carro.php");

require_once("listagem.php");


foreach ($carros as $carro) {
    $carro->status();
    echo"<hr>";
}

$total = $carro->contar($carros);
echo "<h3>Total de veículos: " . $total . "</h3>";


?>