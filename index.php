<?php
$x = 5;
$y = 5.0;
print ("A SOMA É: ");
echo ($x + $y );

if ( $x == $y ){
    echo ("<br><br>Os valores das variáveis são iguais!");

}else {
    echo ("<br><br> Os valores das variáveis são diferentes!");
}

if ( $x === $y){
    echo ("<br><br> As variáveis são idênticas!");
} else {
echo ("<br><br> As variáveis NÃO são idênticas");
}

switch ( $x ) {
    case $y:
        echo ("<br><br> $x é igual a $y");
        break;
    case 1:
        echo ("<br><br> Valor é 1");
        break;
    default:
    echo ("<br><br> Valor default");
}
?>
<hr>

<?php
for ( $i = 0; $i <= 10; $i++ ) {
echo ($i . "<br>");
}
echo ("<hr>");
for ( $i = 11; $i <= 20; $i += 2 ) {
    echo ($i . "<br>");
    }
    echo ("<hr>");
for ( $i = 100; $i > 0; $i -= 3 ) {
    echo ($i . "<br>");
    }
    echo ("<hr>");
// FUAQ Some os números de 1 a 100 e apresente o resultado ao usuário

$soma = 0;
    for ( $i = 1; $i <= 100; $i = $i + 1 ) {
        $soma = $soma + $i;
                }
                echo (" Soma de 1 a 100 é $soma");
        echo ("<hr>");

// FUAQ Some os números pares de 1 a 100 e apresente o resultado ao usuário
$soma = 0;
    for ( $i = 1; $i <= 100; $i = $i++ ){
        if ( $i %2== 0) {
            $soma += $i;
            }
    }
        echo (" Soma dos números pares de 1 a 100 é $soma");
        echo ("<hr>");

        echo ("FATORIAL");
        $fatorial = 1;
    for ( $i = 2; $i <= 5; $i++ ){
                  $fatorial = $fatorial * $i;
            
    }
        echo (" O fatorial de 5 é: $fatorial");
        echo ("<hr>");
?>