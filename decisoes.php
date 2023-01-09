<?php

$idade = 17;
$nome = 'Jonas';
$acompanhado = true;

echo "Você só pode entrar se for maior de 18 anos de idade!";
echo "ou a partir de 16 anos acompanhado." . PHP_EOL;

if(($idade == 18 || $idade > 18) && gettype($nome) == "string"){ // pode-se usar 'or' e 'and'.
    echo "Você tem $idade." . PHP_EOL;
    echo  'Pode entrar!';
}else if ($idade >= 16 and $acompanhado == true){

    echo "Você tem $idade anos e está acompanha." . PHP_EOL;
    echo "Pode entrar!";
}else
    echo "Você só tem $idade anos. Não pode entrar!";

