<?php
// 72
function solution($x, $a) {
    $sum = 0;
    $vals = [];
    $expected_sum = array_sum(range(1, $x));

    for ($i = 0; $i<sizeof($a); $i++) {
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
