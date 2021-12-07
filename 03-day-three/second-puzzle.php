<?php

$input = explode("\n", file_get_contents('input.txt'));

$remainingStringsForOxygen = $input;
$bitPosition = 0;

while (count($remainingStringsForOxygen) > 1) {
    $numbersWithZeroAtBitPosition = [];
    $numbersWithOneAtBitPosition = [];
    for ($i = 0; $i < count($remainingStringsForOxygen); $i++) {
        $currentCharacter = $remainingStringsForOxygen[$i][$bitPosition];
        if ($currentCharacter == "0") {
            $numbersWithZeroAtBitPosition[] = $remainingStringsForOxygen[$i];
        } else {
            $numbersWithOneAtBitPosition[] = $remainingStringsForOxygen[$i];
        }
    }

    if (count($numbersWithZeroAtBitPosition) > count($numbersWithOneAtBitPosition)) {
        $remainingStringsForOxygen = $numbersWithZeroAtBitPosition;
    } else {
        $remainingStringsForOxygen = $numbersWithOneAtBitPosition;
    }

    $bitPosition++;
}

$remainingStringsForCO2 = $input;
$bitPosition = 0;

while (count($remainingStringsForCO2) > 1) {
    $numbersWithZeroAtBitPosition = [];
    $numbersWithOneAtBitPosition = [];
    for ($i = 0; $i < count($remainingStringsForCO2); $i++) {
        $currentCharacter = $remainingStringsForCO2[$i][$bitPosition];
        if ($currentCharacter == "0") {
            $numbersWithZeroAtBitPosition[] = $remainingStringsForCO2[$i];
        } else {
            $numbersWithOneAtBitPosition[] = $remainingStringsForCO2[$i];
        }
    }

    if (count($numbersWithZeroAtBitPosition) <= count($numbersWithOneAtBitPosition)) {
        $remainingStringsForCO2 = $numbersWithZeroAtBitPosition;
    } else {
        $remainingStringsForCO2 = $numbersWithOneAtBitPosition;
    }

    $bitPosition++;
}

$oxygenGeneratorRating = bindec($remainingStringsForOxygen[0]);
$CO2ScrubberRating = bindec($remainingStringsForCO2[0]);

var_dump($oxygenGeneratorRating * $CO2ScrubberRating);
