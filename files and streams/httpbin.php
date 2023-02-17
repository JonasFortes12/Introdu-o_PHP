<?php

$context = stream_context_create(array(
   'http' => [

       'method' => 'POST',
       'header' => 'Content-type: Sxxa',
       'content' => 'Jonas Carvalho Fortes'
   ]
));


echo file_get_contents('http://httpbin.org/post', false ,$context);