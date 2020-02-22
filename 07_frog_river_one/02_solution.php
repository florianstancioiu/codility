<?php
// 72
function solution($x, $a) {
    $sum = 0;
    $vals = [];
    $expected_sum = (int)(($x * ($x + 1)) / 2);
    $size = sizeof($a);

    for ($i = 0; $i<$size; $i++) {
        $k = $a[$i];
        if (in_array($k, $vals)) {
            continue;
        }

        $vals[] = $k;
        $sum += $k;

        if ($sum === $expected_sum) {
            return $i;
        }
    }

    return -1;
}
