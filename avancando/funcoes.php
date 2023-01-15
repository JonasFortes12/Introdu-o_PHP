<?php

/*
    Não é obrigatório, mas pode ser feito a especificação (garantia) do tipo recebido
e retornado de uma função.

*/

echo "Hello, function here!" . PHP_EOL;

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

function toUpperName(array &$conta) // passagem de parâmetro por referência
{
    $conta['titular'] = strtoupper($conta['titular']);
}

/*
O operador de espalhamento:
 (...$a) define um array que receberá vários parâmetros como valores,
que podem ser percorridos e usados para alguma operação.
*/
echo "------------------------------------" . PHP_EOL;
function soma(float ...$a):float
{
    $result = 0;
    foreach ($a as $value){
        $result += $value;
    }
    return $result;
}

var_dump(soma(2, 2, 8.4, 120.5221, 49));






