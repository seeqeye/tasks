<?php

function chunkArray(array $items, int $size): array
{
    $chunks = [];
    $length = count($items);

    if ($size === 0) {
        return $chunks;
    }

    for ($i = 0; $i < $length; $i += $size) {
        $chunk = array_slice($items, $i, $size);

        if (count($chunk) > 0) {
            $chunks[] = $chunk;
        }
    }

    return $chunks;
}

$array = [1, 2, 3, 4, 5];
$result = chunkArray($array, 2);
print_r($result);
