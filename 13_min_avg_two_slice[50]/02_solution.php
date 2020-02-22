<?php
// 0
function solution($a) {
    $min_position = null;
    $min = null;
    $temp_min = null;

    for ($i=0;$i<sizeof($a);$i++) {
        $j = $i + 1;

        $temp_min = calc_temp($i, $j);

        while ($temp_min < calc_temp($i, ++$j)) {
            $temp_min = calc_temp_min($i, $j);
        }

        if ($temp_min < $min) {
            $min = $temp_min;
            $min_position = $i;
        }
    }

    return $min_position;
}

function calc_temp($i, $j) {
    $sum = $a[$i];
    $t = $i;
    while ($t < $j) {
        $t++;

        if (isset($a[$t])) {
            $sum += $a[$t];
        }
    }

    return $sum/($j - $i + 1);
}
