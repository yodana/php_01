<?php
function array2hash($array){
    $new = [];
    if (gettype($array) != "array")
        return ;
    foreach ($array as $a){
        $new[$a[1]] = $a[0];
    }
    return $new;
}

