<?php

$input = explode("\n", file_get_contents('input.txt'));

$horizontalPosition = 0;
$depth = 0;

for ($i = 0; $i < count($input); $i++) {
    $instruction = explode(' ', $input[$i]);
    switch ($instruction[0]) {
        case "forward":
            $horizontalPosition += (int) $instruction[1];
            break;
        case "up":
            $depth -= (int) $instruction[1];
            break;
        case "down":
            $depth += (int) $instruction[1];
            break;
        default:
            throw new Exception("Error Processing Request", 1);
            break;
    }
}

var_dump($depth * $horizontalPosition);
