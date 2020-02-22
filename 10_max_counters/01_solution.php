<?php
// 66
function solution($n, $a) {
    $b = array_fill(0, $n, 0);
    $max = 0;

    for($i=0; $i<sizeof($a); $i++) {
        $k = $a[$i];
        if ($k <= $n) {
            if (!isset($b[$k-1])) {
                $b[$k-1] = 0;
            }
            $b[$k-1]++;

            if ($max < $b[$k-1]) {
                $max = $b[$k-1];
            }
        }

        if ($k === $n + 1) {
            $b = array_fill(0, $n, $max);
        }
    }

    return $b;
}
