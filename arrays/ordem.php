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


//sort() recebe array por referencia

sort($numeros);//ordem alfabetica
sort($notas); //ordena numeros menor p/ maior

var_dump($numeros);
var_dump($notas);

