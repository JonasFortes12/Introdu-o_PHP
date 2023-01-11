<?php

/*
    O PHP só aceita índices de inteiros ou strings nos elementos das lista.
De forma que a linguagem sempre tentará converter para valores válidos, mesmo que estes
sobrescrevam os índices existentes.
Por baixo dos panos, isso é uma tabela Hash.
 * */

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach($array as $idex => $item){
    echo $idex . ' ' . $item . PHP_EOL;
}

