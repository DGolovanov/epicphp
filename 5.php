<?php

$text = file_get_contents('hipster.txt');

var_dump($text);

$parts = explode("\n\n", $text);

var_dump($parts);

krsort($parts);
var_dump($parts);
$result = implode("\n\n", $parts);

var_dump($_Server);