<?php

$matrix = [
    [5, 12, 8, 3],
    [23, 7, 15, 9],
    [4, 18, 2, 25]
];


$max = $matrix[0][0];
$max_position = [0, 0];


foreach ($matrix as $row_index => $row) {
    foreach ($row as $col_index => $element) {

        if ($element > $max) {
            $max = $element;
            $max_position = [$row_index, $col_index];
        }
    }
}

echo "Максимум: $max\n";
echo "Позиция: [$max_position[0]][$max_position[1]]\n";
