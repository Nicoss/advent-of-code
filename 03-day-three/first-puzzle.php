<?php

$input = explode("\n", file_get_contents('input.txt'));

$lineLength = strlen($input[0]);

$gamaLength = [];

for ($j = 0; $j < $lineLength; $j++) {
    $gamaLength[$j] = "";
}

for ($i = 0; $i < count($input); $i++) {
    for ($j = 0; $j < $lineLength; $j++) {
        $gamaLength[$j] .= "" . $input[$i][$j];
    }
}

$gamaString = "";
$epsilonString = "";

for ($k = 0; $k < $lineLength; $k++) {
    if (substr_count($gamaLength[$k], '0') > substr_count($gamaLength[$k], '1')) {
        $gamaString .= "0";
        $epsilonString .= "1";
    } else {
        $gamaString .= "1";
        $epsilonString .= "0";
    }
}

$gamaNumber = bindec($gamaString);
$epsilonNumber = bindec($epsilonString);

var_dump($gamaNumber * $epsilonNumber);
