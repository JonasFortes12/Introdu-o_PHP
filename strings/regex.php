<?php

$telefones = [
    '(24) 99845 - 3457',
    '(67) 92134 - 5601',
    '(78) 97689 - 4589'
];

function telefoneIsValid(string $telefone):bool{
    $regex = '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/';

    return preg_match($regex, $telefone);
}

foreach ($telefones as $telefone){

    if(telefoneIsValid($telefone)){
        echo 'Telefone Válido' . PHP_EOL;
    }else{
        echo 'Telefone Inválido' . PHP_EOL;
    }
}

function replace(&$array, $target):void{
    $regex = '/^(\([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/';
    $array = preg_replace(
        $regex,
        $target,
        $array
    );
}

// '/2' identifica o segundo grupo de captura
replace($telefones, '(XX) \2');

var_dump($telefones);