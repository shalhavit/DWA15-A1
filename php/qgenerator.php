<p class="epadding">
<?php
$inputfile= "php/quotes.txt";
$myquotes = file($inputfile);
srand((double)microtime()*1000000);
$randomquote = rand(0, count($myquotes)-1);
echo $myquotes[$randomquote];
?>
</p>