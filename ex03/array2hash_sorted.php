<?php
function array2hash($array){
    $new = [];
    if (gettype($array) != "array")
        return ;
    foreach ($array as $a){
        $new[$a[0]] = $a[1];
    }
    $sorted = [];
    while ($age = current($new)){
        if ($sorted == [])
            $sorted[] = array(key($new) => $age);
        for ($i = 0; $i < count($sorted); $i++){
            if ord(key($sorted[i])) 
            $sorted[i]
        }
       next($new);
    }
    //faire le tri inverse en partant de la fin si meme lettre alors l'age le + bas en premier
    return $sorted;
}

$array = array(array("Pierre","30"), array("Mary","28"), array("Nelly", "22"));
array2hash($array);