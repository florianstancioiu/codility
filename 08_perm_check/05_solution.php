<?php
// 100
function solution($a) {
    $b = [];
    $size = sizeof($a);
    $expected_sum = ($size * ($size + 1)) / 2;
    $sum = 0;

    for ($i = 0; $i<$size; $i++) {
        if (isset($b[$a[$i]])) {
            return 0;
        }

        if ($a[$i] > $size || $a[$i] < 1) {
            return 0;
        }

        $b[$a[$i]] = $a[$i];
        $sum += $a[$i];
    }

    if ($expected_sum === $sum) {
        return 1;
    }

    return 0;
}
