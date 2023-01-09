<?php
/*
 * Cálculo de IMC
 * Índice de Massa Corporal – IMC = Massa (kg) ÷ Altura (m)².
 * */
$peso = 75;
$altura = 1.78;

$imc = $peso / ($altura)**2;

echo "Seu IMC é $imc. ";
if($imc < 18.5){
    echo "abaixo do peso." . PHP_EOL;

}else if($imc >= 18.5 and $imc <= 24.9){
    echo "peso normal." . PHP_EOL;

}else if($imc >= 25 and $imc <= 29.9){
    echo "sobrepeso." . PHP_EOL;

}else if($imc >= 30 and $imc <= 34.99){
    echo "obesidade grau I." . PHP_EOL;

}else if($imc >= 35 and $imc <= 39.99){
    echo "obesidade grau II (severa)." . PHP_EOL;

}else{
    echo "obesidade grau III (mórbida).";
}


