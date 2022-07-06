<?php
    $file = fopen("ex06.txt", "r");
    $m = fopen("mendeleiev.html", "w");
    // 18 colonnes 7 lignes
    fputs($m, '<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css" type="text/css" />
            <meta charset="utf-8">
            <title>COPY</title>
        </head>
        <body>');
    
    while($line = fgets($file)){
        print_r(explode("=", $line));    
    }
    print_r($tab);
    fputs($m, '</body>
    </html>');

    fclose($file);
    fclose($m);