<?php
    $file = fopen("ex06.txt", "r");
    while($line = fgets($file)){
        echo $line . PHP_EOL;
    }