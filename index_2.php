<?php

/**
 * Количество картин
 */
const PIC_CNT = 80;
/**
 * Количество картин выполненных маркерами
 */
const PIC_MARKERS_CNT = 40;
/**
 * Количество картин выполненных карандашами
 */
const PIC_PENCIL_CNT = 23;

/**
 * Количество картин выполненных красками
 */
$picPaintsCount = PIC_CNT - (PIC_MARKERS_CNT + PIC_PENCIL_CNT);

echo PHP_EOL . "Красками выполнено: " . $picPaintsCount . " рисунков";
