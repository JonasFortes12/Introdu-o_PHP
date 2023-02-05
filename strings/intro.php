<?php

$nome = 'Maximiliano Silva Rodrigues Nascimento';
$url = 'https://alura.com.br';


//Retorna True se contem a string 'Nascimento' dentro da string '$nome'
var_dump(str_contains($nome, 'Nascimento'));

//Verifica se a string começa com 'https'
var_dump(str_starts_with($url, 'https'));

//Verifica se a string termina com '.br'
var_dump(str_starts_with($url, '.br'));

