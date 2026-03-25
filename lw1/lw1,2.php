<?php

echo "Введите 6-ти значное число: ";
$number = readline("");

if (!preg_match('/^\d{6}$/', $number)) {
    echo "Ошибка, Введи 6 цифр (123456)\n";
    exit;
}

$firstHalf = substr($number, 0, 3);
$secondHalf = substr($number, 3, 3);

$sum1 = (int)$firstHalf[0] + (int)$firstHalf[1] + (int)$firstHalf[2];
$sum2 = (int)$secondHalf[0] + (int)$secondHalf[1] + (int)$secondHalf[2];

echo "Первая сумма: $sum1\n";
echo "Вторая сумма: $sum2\n";

$result = ($sum1 === $sum2) ? "Равны" : "Не равны";

echo $result . "\n";
