<?php

$input = explode("\n", file_get_contents('input.txt'));

$increasements = 0;

for ($i = 0; $i < count($input) - 3; $i++) {
    $currentRange = $input[$i] + $input[$i+1] + $input[$i+2];
    $nextRange = $input[$i+1] + $input[$i+2] + $input[$i+3];
    if ($nextRange > $currentRange) {
        $increasements++;
    }
}
var_dump($increasements);
