<?php
function capital_city_from($city){
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
        return "Unknow\n";
    return $c . PHP_EOL;
}
