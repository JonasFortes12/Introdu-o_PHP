<?php
print 'Hello World with print command' . PHP_EOL;

$output = fopen('php://stdout', 'w');
//Error output:
$output2 = fopen('php://stderr', 'w');

fwrite($output, 'Hello World!' . PHP_EOL);
fwrite($output2, 'Error 404!' . PHP_EOL);

// Parsing data directly from zip to console:
$streamZip = fopen('zip://lists.zip#myBuyList.txt', 'r');
$streamTerminal = fopen('php://stdout', 'w');

stream_copy_to_stream($streamZip, $streamTerminal);