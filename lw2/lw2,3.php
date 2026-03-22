<?php

echo "Введи элементы массива (через пробел): ";
$input = explode(" ", trim(fgets(STDIN)));
$arr = array_map('intval', $input);

do {
    echo "Массив: ";
    print_r($arr);

    echo "Сдвинуть вправо? (1=да, 0=выход): ";
    $choice = readline("");

    if ($choice == "1") {
        $last = array_pop($arr);
        array_unshift($arr, $last);
        echo print_r($arr) . "\n\n";
    }
} while ($choice == "1");
