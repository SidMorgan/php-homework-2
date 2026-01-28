<?php

echo "Введите первое значение: " . PHP_EOL;
$inputFirst = trim(fgets(STDIN));
echo "Введите второе значение: " . PHP_EOL;
$inputSecond = trim(fgets(STDIN));

if (filter_var($inputFirst, FILTER_VALIDATE_INT) === false ||
    filter_var($inputSecond, FILTER_VALIDATE_INT) === false) {
    fwrite(STDERR, "Введите, пожалуйста, число" . PHP_EOL);
    exit(1);
}

$a = (int)$inputFirst;
$b = (int)$inputSecond;

if ($b === 0) {
    fwrite(STDERR, "Делить на 0 нельзя"  . PHP_EOL);
    exit(1);
}

$d = $a / $b;
echo "Результат: " . $d . PHP_EOL;
