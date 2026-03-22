<?php

$users = [
    ["name" => "Ivan", "age" => 25],
    ["name" => "Petr", "age" => 17],
    ["name" => "Olga", "age" => 30]
];

$sum = 0;
$count = 0;

foreach ($users as $user) {
    $sum += $user['age'];
    $count++;
}

$average = $sum / $count;
echo "Средний возраст: $average лет\n";
