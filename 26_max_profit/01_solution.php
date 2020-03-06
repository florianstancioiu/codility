<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/training62MUS6-V5U/
function solution($a) {
    if (sizeof($a) < 2) {
        return 0;
    }

    $min = $a[0];
    $max_profit = 0;
    for ($i=0; $i<sizeof($a); $i++) {
        if ($a[$i] < $min) {
            $min = $a[$i];
        }

        $current_profit = $a[$i] - $min;

        if (is_null($max_profit)) {
            $max_profit = $current_profit;
        }

        if ($current_profit > $max_profit) {
            $max_profit = $current_profit;
        }
    }

    return $max_profit;
}
