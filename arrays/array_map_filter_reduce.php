<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//funcão anônima
$callback = function ($value){
    return $value*2;
};
//aplica a func callback em cada item do array e retorna no arrayOut o resultado.
$arrayOut = array_map($callback, $array);

//var_dump($arrayOut);

//filtra somente os valores que resultam em true ao aplicar a função de callback.
//Ou seja, resulta em apenas numeros pares.
$arrayOut2 = array_filter($array, fn($value) => ($value%2 == 0));

//var_dump($arrayOut2);

//Reduz todos os elementos para um só, aplicando a soma de acordo com a function
$arrayOut3 = array_reduce($array, function ($carry, $value){
    $carry += $value;
    return $carry;
});

var_dump($arrayOut3);





