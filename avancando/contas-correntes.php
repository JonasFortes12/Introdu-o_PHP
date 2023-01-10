<?php
/*
    Associations arrays.
*/

$conta1 = [
    'titular' => 'James Web',
    'saldo' => 9000
];

$conta2 = [
    'titular' => 'Luzia Sousa',
    'saldo' => 80000
];

$conta3 = [
    'titular' => 'Isac Alpino',
    'saldo' => 11000
];


$contas = [$conta1, $conta2, $conta3];

for($i=0; $i<count($contas); $i++) {
    echo $contas[$i]['titular'] . PHP_EOL;
}

