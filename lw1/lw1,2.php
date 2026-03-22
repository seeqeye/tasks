<?php

echo "Введите 6-ти значное число: ";
$number = readline("");

if (!preg_match('/^\d{6}$/', $number)) {
    echo "Ошибка, Введи 6 цифр (123456)\n";
    exit;
}

$first_half = substr($number, 0, 3);
$second_half = substr($number, 3, 3);

$sum1 = (int)$first_half[0] + (int)$first_half[1] + (int)$first_half[2];
$sum2 = (int)$second_half[0] + (int)$second_half[1] + (int)$second_half[2];

echo "Первая сумма: $sum1\n";
echo "Вторая сумма: $sum2\n";

$result = ($sum1 == $sum2) ? "Равны" : "Не равны";

echo $result . "\n";
