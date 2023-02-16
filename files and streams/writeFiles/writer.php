<?php

$file = fopen('myBuyList.txt', 'w');

$content = <<<END
    _____________My Buy List_______________
    
    [] - Salad
        [] - Tomato
        [] - Onion
        [] - Apple
        [] - Potato      
    [] - Beer
    [] - Ice
    [] - Lemon
END;

fwrite($file, $content);

fclose($file);

//Use easily:
file_put_contents('myBuyList.txt', $content);

function addIten(string $item):void
{
    //append mode:
    $file = fopen('myBuyList.txt', 'a');
    fwrite($file, "\n    [] - {$item}");
    fclose($file);
}
addIten('Watermelon');
addIten('Rice');

//Use easily with append mode:
file_put_contents('myBuyList.txt', "\n______For Lunch____", FILE_APPEND);


