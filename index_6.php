<?php

echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($x = 1; $x < 10; $x++) {
    echo "<tr>";
    for ($y = 1; $y < 10; $y++) {
        if ($x % 2 === 0 && $y % 2 === 0) {
            echo "<td align='center'>(" . ($x * $y) . ")</td>";
        } elseif ($x % 2 !== 0 && $y % 2 !== 0) {
            echo "<td align='center'>[" . ($x * $y) . "]</td>";
        } else {
            echo "<td align='center'>" . ($x * $y) . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

