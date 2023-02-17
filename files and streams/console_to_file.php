<?php

//To get data from keyboard:
$stream = fopen('php://stdin', 'r');

$data = fgets($stream);
//or:
//$data = fgets(STDIN);

file_put_contents('myBuyList.txt', "\n{$data}", FILE_APPEND);


fclose($stream);

