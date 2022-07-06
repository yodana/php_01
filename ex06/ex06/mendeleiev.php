<?php
    $file = fopen("ex06.txt", "r");
    // 18 colonnes 7 lignes
    while($line = fgets($file)){
        echo $line;
    }
