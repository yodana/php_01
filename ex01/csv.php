<?php
$file = fopen("ex01.txt", "r");
$line = fgets($file);
$string = "";
$i = 0;
while ($line[$i]){
    if ($line[$i] == ","){
        echo $string . PHP_EOL;
        $string = "";
    }
    else
        $string .= $line[$i];
    $i = $i + 1;
}
echo $string . PHP_EOL;
fclose($file);