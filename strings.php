<?php
/*
 * No PHP há uma diferença entre 'aspas sinples' e "aspas duplas"
 *
 *  Em aspas simples, a string é interpretada diretamente como string.
 *
 *  Já em aspas duplas, a string é interpretada junto com caracteres especiais e variáveis,
 *      fazendo uma concatenação autmática de dados.
 *
 *          __Sequências de escape__
    \n	Nova linha (LF ou 0x0A (10) em ASCII)
    \r	Retorno de carro (CR ou 0x0D (13) em ASCII)
    \t	Tabulação horizontal (HT ou 0x09 (9) em ASCII)
    \v	Tabulação vertical (VT ou 0x0B (11) em ASCII)
    \e	Escape (ESC or 0x1B (27) em ASCII)
    \f	Form feed (FF ou 0x0C (12) em ASCII)
    \\	Contra barra ou barra invertida
    \$	Sinal de cifrão
    \"	aspas duplas

 * */

$idade = 22;

echo "\t Olá mundo! Minha idade é $idade anos. \n" ; //concatenação - aspas duplas
echo 'Olá mundo! Minha idade é ' . $idade . ' anos. ' . PHP_EOL; //concatenação

echo "Segue alguns nomes:" . PHP_EOL;// PHP_EOL armazena o char especial de quebra de linha seguindo o SO.
echo 'Hades' . PHP_EOL;
echo 'Poseidon' . PHP_EOL;
echo 'Zeus' . PHP_EOL;