<?php
/*
 * Exibir a tabuada de determinado número.
 */

$numero = 9;
$tamanho = 20;
for ($i = 1; $i <= $tamanho; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i == $resultado" . PHP_EOL;
}



