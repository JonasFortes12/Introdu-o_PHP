<?php
$notasBimestre1 = [
    'Diego' => 6.8,
    'Leticia' => 5.7,
    'Raquel' => 8.7,
    'João' => 7.3,
    'Isac Alpino' => null,
    'Bartolomeu' => null
];
$notasBimestre2 = [
    'Diego' => '6.2',
    'Leticia' => '7.2',
    'Raquel' => '4.2',
    'João' => '8.0',
    'Isac Alpino' => '9.6'
];

//Retorna um array com os elementos(notas) que estão em um array e não estão em outro:
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//Retorna um array com os elementos cujo indice(aluno) que estão em um array e não estão em outro:
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Retorna um array com os elementos(notas) que estão em um array e não estão em outro
// combinando indice e valor:
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//Mais opções array_diff: https://www.php.net/manual/pt_BR/function.array-diff-assoc.php

//Retorna um array somente com os indices do array dado:
var_dump(array_keys($notasBimestre1));

//Retorna um array somente com os valores do array dado:
var_dump(array_values($notasBimestre1));

//combina os valores de 2 array, como chave e valor, respectivamente:
var_dump(array_combine(array_values($notasBimestre1),array_keys($notasBimestre1)));
// Nesse caso, ouve uma inversão entre valor e chave
//Se quiser somente inverter diretamente, tamos:
var_dump(array_flip($notasBimestre2));
// precisa que os valores sejam do tipo strings
