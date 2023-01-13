<?php

/*
    Para importar/incluir um arquivo de código externo. Utilizamos: include "/nomearquivo.php"

    Se a importação for obrigatóri, usa-se: require "/nomearquivo.php

    E se for obrigatória garantido somente uma importação no arquivo,
    usamos: require_once "/nomearquivo.php

 * */

require_once "funcoes.php";

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

toUpperName($contasCorrente['190.478.984-81']);

unset($contasCorrente['190.478.984-81']); // Removendo um item da lista.

echo "<ul>";
foreach ($contasCorrente as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibirMensagem(
        "<li> CPF: $cpf | Nome:$titular | Saldo: $saldo </li>
    ");
}
echo "</ul>";

