<?php

$input = explode("\n", file_get_contents('input.txt'));

$increasements = 0;

for ($i = 1; $i < count($input); $i++) {
    if ($input[$i-1] < $input[$i]) {
        $increasements++;
    }
}

var_dump($increasements);
