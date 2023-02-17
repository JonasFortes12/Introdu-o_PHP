<?php


$context = stream_context_create([
    'zip' => [
        'password' => '1234'
    ]
]);

echo file_get_contents('zip://myBuyList.zip#myBuyList.txt', false, $context);