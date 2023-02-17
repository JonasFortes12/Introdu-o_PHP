<?php
require_once 'MyFilter.php';

$content = fopen('buyList.txt', 'r');


stream_filter_register('titles.list', MyFilter::class);
stream_filter_append($content,'titles.list');

echo fread($content, filesize('buyList.txt'));
