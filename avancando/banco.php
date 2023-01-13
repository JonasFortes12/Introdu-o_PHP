<?php

/*
    Para importar/incluir um arquivo de código externo. Utilizamos: include "/nomearquivo.php"

    Se a importação for obrigatóri, usa-se: require "/nomearquivo.php

    E se for obrigatória garantido somente uma importação no arquivo,
    usamos: require_once "/nomearquivo.php

 * */

require_once "funcos.php";

$contasCorrente = [
    '190.478.987-65' => [
        'titular' => 'James Web',
        'saldo' => 9000
    ],
    '190.478.984-81' => [
        'titular' => 'Luzia Sousa',
        'saldo' => 80000
    ],
    '190.472.987-72' => [
        'titular' => 'Isac Alpino',
        'saldo' => 11000
    ]
];

$contasCorrente['190.478.987-65'] = sacar($contasCorrente['190.478.987-65'], 100);
$contasCorrente['190.472.987-72'] = depositar($contasCorrente['190.472.987-72'], 450);

foreach ($contasCorrente as $cpf => $conta){
//    exibirMensagem($cpf .' '. $conta['titular'] . '  ' . "Saldo:R$" . $conta['saldo'] . PHP_EOL);
    exibirMensagem(
        "CPF: $cpf | Nome:{$conta['titular']} | Saldo: {$conta['saldo']}
    ");
}
