<?php
$file= "php/quotes.txt";
$quotes = file($file);
srand((double)microtime()*1000000);
$randomquote = rand(0, count($quotes)-1);
echo $quotes[$randomquote];
?>
