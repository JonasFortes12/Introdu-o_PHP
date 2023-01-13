<?php

/*
    Não é obrigatório, mas pode ser feito a especificação (garantia) do tipo recebido
e retornado de uma função.

*/

//Função(Há um retorno)
function sacar(array $conta, float $valor): array{
    if($valor <= $conta['saldo']){
        $conta['saldo'] -= $valor;
        exibirMensagem('Valor Sacado!');
    }else{
        exibirMensagem('Valor inválido!');
    }
    return $conta;
}

function depositar(array $conta, float $valor): array{
    if($valor > 0){
        $conta['saldo'] += $valor;
        exibirMensagem('Valor Depositado!');
    }else{
        exibirMensagem('Valor inválido!');
    }
    return $conta;
}

//Subrotina(Não há retorno)
function exibirMensagem($mensagem){
    echo "$mensagem" . PHP_EOL;
}

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
