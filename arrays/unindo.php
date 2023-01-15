<?php
$alunos2021 = [
    'Diego',
    'Leticia',
    'Raquel',
    'João',
    'Isac Alpino',
    'Bartolomeu'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Maximiliano',
    'Bovarry',
];

//Retorna um array com a junção de dois arrays
$alunos2022 = array_merge($alunos2021, $novosAlunos);

//Junta os arrays sobrescrevendo os indices numericos
$alunos_2022 = $alunos2021 + $novosAlunos;

//https://php.net/manual/en/function.array-merge.php

//junta os arrays elemento por elemento, desempacotando-os. (...$array)
$alunos2022unpack = [...$alunos2021, 'VITOR', ...$novosAlunos];

var_dump($alunos2022unpack);





