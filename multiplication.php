<?php
declare(strict_types=1); // Strict au niveau du type (sinon erreur)

function doMultiplication(int $limit): array {
    $tableRes = [];

    for ($i = 1; $i <= $limit; $i++) {
        $tableLine = [];
        for ($j = 1; $j <= $limit; $j++) {
            array_push($tableLine, $i * $j);
        }
        array_push($tableRes, $tableLine);
    }
    return $tableRes;
}

function display(int $limit): void {
    $tableMultiplication = doMultiplication($limit);
    foreach ($tableMultiplication as $lineMultiplication) {
        foreach($lineMultiplication as $elementMulti) {
            echo str_pad((string) $elementMulti, 5, " ", STR_PAD_LEFT);
        }
        echo "\n";
    }
}


function start(): void {
    $start = true;
    while ($start) {
        echo "What limit do you want ?  (from 1 to 10) : ";
        $handle = fopen("php://stdin", "r");
        $line = fgets($handle);
        $limit = (int)trim($line);
        if ($limit < 1) {
            echo "Limit must be above 1 !\n";
            $start = true;
        } elseif ($limit > 10) {
            echo "Limit must be below 10 !\n";
            $start = true;
        } else {
            echo "\n";
            echo "Let me count ...\n\n";
            display($limit);
            $start = false;
        }
    }
}

start();