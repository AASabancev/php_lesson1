<?php

$age = rand(-10, 100);

echo PHP_EOL . "Ваш возраст: " . $age;
if ($age >= 18 && $age <= 65) {
    echo PHP_EOL . "Вам еще работать и работать";
} elseif ($age > 65) {
    echo PHP_EOL . "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo PHP_EOL . "Вам еще рано работать";
} else {
    echo PHP_EOL . "Неизвестный возраст";
}

