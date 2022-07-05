<?php
function array2hash($array){
    $new = [];
    if (gettype($array) != "array")
        return ;
    foreach ($array as $a){
        $new[$a[0]] = $a[1];
    }
    // faire le tri inverse en partant de la fin si meme lettre alors l'age le + bas en premier
    return $new;
}

$array = array(array("Pierre","30"), array("Mary","28"), array("Nelly", "22"));

print_r(array2hash($array));

