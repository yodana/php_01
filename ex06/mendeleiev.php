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
    $array = array();
    while($line = fgets($file)){
        $array[] = explode("=", $line);
    }
    foreach($array as $a){
        print_r(explode(":", explode(",", $a[1])[0]));
    }
    fputs($m, '</body>
    </html>');
    fclose($file);
    fclose($m);