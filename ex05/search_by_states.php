<?php
function search_by_states($city){
    $all = explode(", ", $city);
    foreach($all as $a){
        print_r($a);
    };
    $r = NULL;
    $states = [
        'Oregon' => 'OR',
        'Alabama' => 'AL',
        'New Jersey' => 'NJ',
        'Colorado' => 'CO',
        ];
    $capitals = [
        'OR' => 'Salem',
        'AL' => 'Montgomery',
        'NJ' => 'trenton',
        'KS' => 'Topeka', 
        ];
    foreach($states as $key => $value){
        if ($key == $city){
            $r = $value;
        }
    }
    $c = NULL;
    foreach($capitals as $key => $value){
        if ($key == $r){
            $c = $value;
        }
    }
    if ($c == NULL)
        return $city . "is neither a capital nor a state.\n";
    return $c . PHP_EOL;
}

print_r(search_by_states("Oregon, trenton, Topeka, NewJersey"));