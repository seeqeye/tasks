<?php

function toSnakeCase(string $input): string
{
    $result = '';

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if ($i > 0 && ctype_upper($char) === true) {
            $result .= '_';
        }

        $result .= strtolower($char);
    }

    return $result;
}

$tests = [
    'helloWorld',
    'myVariableName',
    'XMLHttpRequest',
    'hello',
    'HelloWorldTestCase'
];

foreach ($tests as $test) {
    echo $test . ' → ' . toSnakeCase($test) . "\n";
}
