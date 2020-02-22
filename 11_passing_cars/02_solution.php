<?php
// 100
function solution($a) {
    $b = [];
    $max = 0;
    $total = 0;

    for ($i=sizeof($a) - 1; $i != -1; $i--) {
        $max += $a[$i];

        if (! isset($b[$i])) {
            $b[$i] = $max;
        }

        if ($a[$i] === 0) {
            $total += $max;

            if ($total > 1000000000) {
                return -1;
            }
        }
    }

    return $total;
}
