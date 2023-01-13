<?php

$idadeList = [34,65, 43, 23, 67, 12, 23, 35];

for($i=0; $i < count($idadeList); $i++){
    echo "idade $i -> $idadeList[$i]" . PHP_EOL;
}

//Coloca os valores da lista em odem para as variaveis definidas:
list($idadeLidia, $idadePedro, $idadeAmaral) = $idadeList;
//ou
[$idadeLidia, $idadePedro, $idadeAmaral] = $idadeList;
//ou ainda, explicitando os índices escolhidos:
[2 => $idadeLidia, 3 => $idadePedro, 4 => $idadeAmaral] = $idadeList;

echo "$idadeLidia, $idadePedro, $idadeAmaral" . PHP_EOL;