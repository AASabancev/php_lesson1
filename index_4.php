<?php

$day = rand(1, 10);

echo PHP_EOL . "Текущий день: " . $day;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo PHP_EOL . "Это рабочий день";
        break;
    case 6:
    case 7:
        echo PHP_EOL . "Это выходной день";
        break;
    default:
        echo PHP_EOL . "Неизвестный день";
}
