<?php

$matrix = [
    [5, 12, 8, 3],
    [23, 7, 15, 9],
    [4, 18, 2, 25]
];


$max = $matrix[0][0];
$maxPosition = [0, 0];


foreach ($matrix as $rowIndex => $row) {
    foreach ($row as $colIndex => $element) {

        if ($element > $max) {
            $max = $element;
            $maxPosition = [$rowIndex, $colIndex];
        }
    }
}

echo "Максимум: $max\n";
echo "Позиция: [$maxPosition[0]][$maxPosition[1]]\n";
