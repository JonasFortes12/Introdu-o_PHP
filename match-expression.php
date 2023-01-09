<?php

abstract class Question{}
class Single extends Question{}
class Multiple extends Question{}

$input = 'multi';

/*
 Primeiramente, vamos apontar os problemas da estrutura 'switch'.
    - Sempre temos que colocar o 'break' para evitar a continuação de verificações.
    - É necessário um 'default:' apenas para combinação não encontrada.
    - É estranho definir uma variável dentro do escopo da estrutura para utiliza-la fora.

 */

switch ($input){
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
        throw new Exception('Invalid question type');
        break;
}

/*
 Para tal, usaremos uma estrutura melhor, chamada de Match Expression.
 */

$question = match($input) {
    'single' => new Single(),
    'multi', 'multiple' => new Multiple(),
    default => throw new InvalidArgumentException('Invalid question type')
};

var_dump($question);






