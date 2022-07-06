<?php
function search_by_states($city){
    $all = explode(",", $city);
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
    foreach($all as $a){
        $r = NULL;
        $find = 0;
        foreach($states as $key => $value){
            if ($key == trim($a)){
                $r = $value;
                foreach($capitals as $k => $v){
                    if ($k == $r){
                        print_r($v . " is the capital of " . $key . "." . PHP_EOL);
                        $find = 1;
                    }
                }
            }
        }
        foreach($capitals as $key => $value){
            if ($value == trim($a)){
                $r = $key;
                foreach($states as $k => $v){
                    if ($v == $r){
                        print_r($value . " is the capital of " . $k . "." . PHP_EOL);
                        $find = 1;
                    }
                }
                $r = $value;
            }
        }
        if ($find == 0)
            print_r(trim($a) . " is neither a capital nor a state." . PHP_EOL);
    };
}