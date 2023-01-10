<?php

/*
    Sei que um array de arrays pode ser definido assim, Array = [[], [], []];
    Já um a array associativo de arrays associativos, temos:
*/

$contasCorrente = [
    19047898765 => [
        'titular' => 'James Web',
        'saldo' => 9000
    ],
    19047898465 => [
        'titular' => 'Luzia Sousa',
        'saldo' => 80000
    ],
    19047298765 => [
        'titular' => 'Isac Alpino',
        'saldo' => 11000
    ]
];

/*
    Quando não definimos o índice de cada elemento, o PHP infere uma numerção
    começando do 0. Ou seja, 0 => $conta1, 1 => $conta2, 2 => $conta3.

    E assim, podemos mudar tais índices e explicitá-los no laço 'foreach'.

*/

foreach ($contasCorrente as $cpf => $conta){
    echo  $cpf .' '. $conta['titular'] . PHP_EOL;
}









