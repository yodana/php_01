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
    print_r($array);
    //$name = $array[0][0];
    $i = 0;
    foreach($array as $a){
        $array[$i] = array("name" => trim($array[$i][0]), 
        "position" => explode(":",explode(",", $a[1])[0])[1],
        "number" => explode(":",explode(",", $a[1])[1])[1],
        "small" => explode(":",explode(",", $a[1])[2])[1],
        "molar" => explode(":",explode(",", $a[1])[3])[1],
        "electron" => array_sum(explode(" ",explode(":",explode(",", $a[1])[4])[1])));
        $i++;
    }
    foreach($array as $a){
        fputs($m, '<table>
            <tr>
            <td style="border: 1px solid black; padding:10px">
            <h4>' . $a["name"] . '</h4>
            <ul>
            <li> No ' . $a["number"] . '</li>
            <li>' . $a["small"]. '</li>
            <li>' . $a["molar"]. ' </ li>
            <li>' . $a["electron"]. '</li>
            <ul>
            </td>');
    }
    print_r($array);
    fputs($m, '</body>
    </html>');
    fclose($file);
    fclose($m);