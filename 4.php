<?php

$str = 'fbjbjb uvbvih jbvui vrgrg';
var_dump($str);
$words = explode(' ', $str);
var_dump($words);
$totalWordsCount = count($words);
echo $totalWordsCount;

$evenWords = 0;
foreach ($words as $key => $value) {
	if (empty($value)) {
		unset($words[$key]);
		continue;
	}
	$length = mb_strlen($value);
	if ($length % 2 ==0) {
	$evenWords++;
}
};
