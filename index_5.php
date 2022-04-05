<?php

$bmw = [
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
];

$toyota = [
    'model' => 'Camry',
    'speed' => '180',
    'doors' => '5',
    'year' => '2021'
];

$opel = [
    'model' => 'Zafira',
    'speed' => '150',
    'doors' => '7',
    'year' => '2017'
];

$cars = [
    'BMW' => $bmw,
    'Toyota' => $toyota,
    'Opel' => $opel
];

if (!empty($cars)) {
    foreach ($cars as $brand => $car) {
        echo PHP_EOL . 'CAR ' . $brand;
        echo PHP_EOL . join(' ', $car);
//        echo PHP_EOL . $car['model'] . ' ' . $car['speed'] . ' ' . $car['doors'] . ' ' . $car['year'];
    }
}
