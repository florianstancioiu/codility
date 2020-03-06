<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/trainingPWDYSE-4D2/
function solution($a) {
    $max = $max_global = $a[0];
    for ($i=1; $i<sizeof($a); $i++) {
        $max = max($a[$i], $max + $a[$i]);
        $max_global = max($max, $max_global);
    }

    return $max_global;
}
