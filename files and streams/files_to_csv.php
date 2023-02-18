<?php

$myList = file('myBuyList.txt');
$externList = file('buyList.txt');

$csvContents = fopen('csvContents.csv', 'w');

foreach ($myList as $item){
    $row = [trim($item), 'yes'];
    fwrite($csvContents, implode(';', $row));
}

foreach ($externList as $item){
    $row = [trim($item), 'no'];
    //fwrite($csvContents, implode(',' $row));
    //same result:
    fputcsv($csvContents, $row, ';');
}

fclose($csvContents);

echo file_get_contents('csvContents.csv') . PHP_EOL;