<?php

$contador = 1;

echo "----------Laço While---------" . PHP_EOL;

while ($contador <= 15){
    echo "#$contador" . PHP_EOL;
    $contador++;
}

echo "----------Laço For---------" . PHP_EOL;

for($contador = 1; $contador <= 15; $contador++)
    echo "@$contador" . PHP_EOL;


echo "----------Laço Do_While---------" . PHP_EOL;

$i = 1;
do {
    echo "*$i" . PHP_EOL;
    $i++;
}while($i <= 15);