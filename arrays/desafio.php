<?php
/*  DESAFIO
-Listar o número de países participantes;

-Fazer com que seus nomes fiquem em letras maiúsculas;

-Ordenar:
    --Pelo país que tiver mais medalhas de ouro
    --Em caso de empate, pelo país que tiver mais medalhas de prata
    --Em caso de empate, pelo país que tiver mais medalhas de bronze

-Listar o número de medalhas distribuídas na competição
*/

$json = file_get_contents("dados.json");

//decodifica a string(json) em arrays associativos:
$dataObj = json_decode($json, true);

//Altera todos os nomes de paises para maiúsculas
$dataObj = array_map(function (array $array):array{
    $array['pais'] = strtoupper($array['pais']);
    return $array;
}, $dataObj);

//Ordena os países pelo numero de medalhas
usort($dataObj, function ($pais1, $pais2){
    if(($pais2['medalhas']['ouro'] <=> $pais1['medalhas']['ouro']) == 0){
        if(($pais2['medalhas']['prata'] <=> $pais1['medalhas']['prata']) == 0){
            return $pais2['medalhas']['bronze'] <=> $pais1['medalhas']['bronze'];
        }else{
            return $pais2['medalhas']['prata'] <=> $pais1['medalhas']['prata'];
        }
    }else{
        return $pais2['medalhas']['ouro'] <=> $pais1['medalhas']['ouro'];
    }
});


echo "________________Países Participantes:_______________" . PHP_EOL;
foreach ($dataObj as $index => $obj){
    $index+=1;
    echo "$index - {$obj['pais']}" . PHP_EOL;
}

//Soma todas as medalhas
$numeroDeMedalhas = array_reduce($dataObj, function ($medalhasAcumuladas, $itemAtual) {
    $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
        return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
    }, 0);
    return $medalhasAcumuladas + $medalhasDoPais;
}, 0);

echo "Total de medalhas entregues: $numeroDeMedalhas";













