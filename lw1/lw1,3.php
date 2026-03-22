<?php

do {
    echo "Введите число: ";
    $num = readline("");

    if ($num % 3 == 0) {
        echo "\nЧисло делится на 3\n";
    } elseif ($num % 5 == 0) {
        echo "\nЧисло делится на 5\n";
    } else {
        echo "\nЧисло не делится ни на 3, ни на 5\n";
        break;
    }

    if ($num % 5 == 0 && $num % 3 == 0) {
        echo "\nЧисло делится и на 3, и на 5\n";
    } else {
        echo "\nЧисло не делится одновременно на 3 и на 5\n";
    }

    echo "\nЗапустить программу заново?\n";
    echo "1 — ДА / 0 — ВЫХОД\n";
    echo "Твой выбор: ";
    $repeat = readline("");
} while ($repeat == "1");
