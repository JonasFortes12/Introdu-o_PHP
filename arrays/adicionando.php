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

//adiciona vários elementos ao final do array
array_push($novosAlunos, 'Bart', 'Belarion');
//adiciona 1 elemento ao final do array
$novosAlunos[] = 'Tomé';
//adiciona vários elementos no inicio do array
array_unshift($novosAlunos, 'Sansa', 'Atreus');
//remove o primeiro elemento do array e retorna o elemento removido
array_shift($novosAlunos);
//remove o ultimo elemento do array e retorna o elemento removido
array_pop($novosAlunos);

var_dump($novosAlunos);