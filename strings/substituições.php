<?php

$text = <<<TEXT
O display quebrou. 
Puta que pariu! 
logo agora que comprei um novo, caralho!
TEXT;

//Substitui palavras específicas dentro da string
$text = str_replace(
    ['caralho', 'Puta'],
    ['C***', 'P****'],
    $text);
var_dump($text);

//substitui cracteres específicos dentro da string
var_dump(strtr($text, 'caralho', '**!'));

//agora, substitui as palavras por outras strings passando arrays associativos
var_dump(strtr($text, ['caralho' => 'c***', 'Puta' => 'P**a']));




