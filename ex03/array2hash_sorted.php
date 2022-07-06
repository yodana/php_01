<?php
function array2hash($array){
    $new = [];
    if (gettype($array) != "array")
        return ;
    foreach ($array as $a){
        $new[$a[0]] = $a[1];
    }
    $keys = array_keys($new);
    $values = array_values($new);
    for ($i = 0; $i < count($keys); $i++){
        for($j = 0; $j < count($keys); $j++){
            if (ord($keys[$j][-1]) <= ord($keys[$j + 1][-1])){
                if ((ord($keys[$j][-1]) == ord($keys[$j + 1][-1]) && $values[$j] > $values[$j + 1]) || (ord($keys[$j][-1]) < ord($keys[$j + 1][-1]))){
                    $save = $keys[$j];
                    $keys[$j] = $keys[$j + 1];
                    $keys[$j+ 1] = $save;
                    $save = $values[$j];
                    $values[$j] = $values[$j + 1];
                    $values[$j+ 1] = $save;
                }
            }
        }
    }
    $new = array_combine($keys, $values);
    return $new;
}

$array = array(array("Pierre","30"));
array2hash($array);