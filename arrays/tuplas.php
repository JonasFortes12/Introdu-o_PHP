<?php
/*
    Podemos atribuir elementos de um array para variáveis, dando
significado para elas.
    Usando a função 'list()'.
*/

$dados = ['joão', 18, 'Sobral - CE'];

list($nome, $idade, $cidade) = $dados;
//ou
[$nome, $idade, $cidade] = $dados;
//ou, em caso de arrays associativos:
[0 => $nome, 1 => $idade, 2 => $cidade] = $dados;

var_dump($cidade);

/*
    Se existir um array associativo, podemos extrair seus dados,
de modo que a chave será o nome da variável, e o valor atribuido para esta variavel:
*/
$dados2 = [
    'nome' => 'Pedro',
    'idade' => 20,
    'cidade' => 'Recife - PE'
];

extract($dados2);
var_dump($cidade); //sobrescreve a variável já exixtente. Cuidado!.

//O inverso pode ser feito com 'compact()'
$nome = 'Camargo';//alterando o nome.

//cria um array associativo a partir das variáveis e seus valores.
$dados3 = compact('nome', 'idade', 'cidade');

var_dump($dados3);


