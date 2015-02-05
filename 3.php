<?php


$listOfStrings = [
    'hEy',
    'dAy',
    'sun',
    'ebay',
];

function format(array $list = array()) {
   foreach ($list as $key => $Item) {
      $list[$key] = ..
   };
    return implode(', ', $list)   
};

$result = format($listOfStrings);

var_dump($result);