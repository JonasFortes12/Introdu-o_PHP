<?php

$notas = [
    7.3,
    5.9,
    2.3,
    8.0,
    9.3,
    7.6
];

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

//sort() recebe array por referencia

sort($numeros);//ordem alfabetica
sort($notas); //ordena numeros menor p/ maior

/*
    Quero ordenar o array $alunosNotas pela ordem das notas.
    Uso a funcao 'usort()', para definir um critério de ordenação.
    O critério é definido por uma funcão de callback 'cmpNotas()'.
 */

function cmpNotas($aluno1, $aluno2){
    if($aluno1['nota'] == $aluno2['nota']){
        return 0;
    }
    return ($aluno1['nota'] < $aluno2['nota']) ? -1 : 1; //( 1:-1 ordem decrescente).
}

//Este operador '<=>' retorna os valores de forma mais simples:
function cmp2Notas($aluno1, $aluno2){
    return $aluno1['nota'] <=> $aluno2['nota']; //( $aluno2['nota'] <=> $aluno1['nota'] ordem decrescente)
}


var_dump($alunosNotas);
echo "______________" . PHP_EOL;
usort($alunosNotas, "cmp2Notas");
var_dump($alunosNotas);

// Mais sobre funções de ordenação: https://www.php.net/manual/pt_BR/array.sorting.php

