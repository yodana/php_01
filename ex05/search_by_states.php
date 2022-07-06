<?php
function search_by_states($city){
    $all = explode(",", $city);
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
    $r = NULL;
    foreach($all as $a){
        foreach($states as $key => $value){
            if ($key == trim($a)){
                $r = $value;
            }
        }
    };
    print_r($r);
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

search_by_states("Oregon, trenton, Topeka, NewJersey");