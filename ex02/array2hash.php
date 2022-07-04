<?php
function array2hash($array){
    $new = [];
    foreach ($array as $a){
        $new[$a[1]] = $a[0];
    }
    return $new;
}