<?php

echo "Введите число:";
$number = readline();

$even = ($number % 2 === 0) ? 'число четное'  :  'число не четное';

echo $even;
