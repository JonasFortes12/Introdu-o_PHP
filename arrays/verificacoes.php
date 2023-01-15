<?php

$numeros = [
    'um',
    'dois',
    'tres',
];
$alunosNotas = [
    [
        'nome' => 'Diego',
        'nota' => 6.8
    ],
    [
        'nome' => 'Leticia',
        'nota' => 5.7
    ],
    [
        'nome' => 'Raquel',
        'nota' => 8.7
    ],
    [
        'nome' => 'João',
        'nota' => 7.3
    ],

];
$notas = [
    'Diego' => 6.8,
    'Leticia' => 5.7,
    'Raquel' => 8.7,
    'João' => 7.3,
    'Isac Alpino' => null
];


var_dump(is_array($numeros));//verifica se é array


var_dump(array_is_list($alunosNotas));// verifica se o array é uma lista,
//ou seja, se os índices são numéricos contínuos


var_dump(array_is_list($alunosNotas[2]));

//verifica se existe um indice 'Diego' no array
var_dump(array_key_exists('Diego', $notas));
// e se o valor no índice está definido:
var_dump(isset($notas['Isac Alpino']));

//Verifica se existe o valor 10 no array:
// o terceiro parâmetro define se será uma comparação estritamente igual '==='
var_dump(in_array(10, $notas, true));

//Busca o índice(chave) de um dado valor no array:
echo array_search(10, $notas) . PHP_EOL;
var_dump(array_search(7.3, $notas, true));