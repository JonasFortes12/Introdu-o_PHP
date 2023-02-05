<?php

$nome = 'luter albuquerque júnior';
$email = 'LuterAlbuquérque@alu.ufc.br ';
$string2 = 'Áíô';

//busca a posição do arroba numa string
$arrobaPosition = strpos($email, '@');

//Retorna uma substring - posicão 0 a 16
var_dump(substr($email, 0, 16));

//Retorna apenas o domínio do email
var_dump(substr($email, $arrobaPosition));

//Retorna apenas o nome do usuario
$usuario = substr($email, 0, $arrobaPosition);
var_dump($usuario);

//retorna o tamanho da string (qtd de bytes)
var_dump(strlen($nome));

//note que caracteres com assento ocupam dois bytes
var_dump(strlen($string2));
// ... para contar também strings ne multi bytes:
var_dump(mb_strlen($string2));

//retorna uma cópia em maiúsculo do nome '$usuario'
var_dump(strtoupper($usuario));

//retorna uma cópia em minúsculo do nome '$usuario'
var_dump(strtolower($usuario));

//Obs: as funções strtolower() e strtoupper() não reconhecem letras com assento. Não modificam
//... para tal, usamos as funções multi bytes:
var_dump(mb_strtoupper($usuario));
var_dump(mb_strtolower($usuario));

//Torna maiúsculo letra inicial
var_dump(mb_convert_case($nome, MB_CASE_TITLE));


//Retorna um array com os nomes separadamente, por vírgula
var_dump(explode(' ', $nome));
// O parâmetro limit define o array de saída com x posições, no caso 2
var_dump(explode(' ', $nome, 2));


//pega o primeiro nome do array de retorno de 'explode()'
$pnome = explode(' ', $nome)[1];
var_dump($pnome);

//Remove (apara) os espaços, ou qualquer caractere definido no parâmetro, das pontas da string
var_dump(trim($email, 'L'));