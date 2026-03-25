<?php

function wordCount(string $text): array
{
    $text = strtolower($text);

    $text = preg_replace('/[^\p{L}\s]/u', ' ', $text); /*
                                                        
                                                         .? (/../u начало и конец регулярного выражения с флагом unicode
                                                            (работа со свойствами unicode (\p{L} и т.п.) и корректная обработка многобайтных символов))
                                                         .? [] символьный класс
                                                         .? \p{L} - любая буква, \s пробельный символ
                                                         .? ^ отрицание, т.е. найти все что не подходит под описание в выражении
                                                         
                                                       */
    $text = preg_replace('/\s+/', ' ', trim($text));

    $words = explode(' ', $text);

    $count = [];

    foreach ($words as $word) {
        if ($word === '') {
            continue;
        }

        if (!isset($count[$word])) {
            $count[$word] = 0;
        }
        $count[$word]++;
    }

    return $count;
}

$result = wordCount('hello world hello');
print_r($result);
