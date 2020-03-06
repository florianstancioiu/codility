<?php
// score: 53
// correctness: 37
// performance: 80
// link: https://app.codility.com/demo/results/trainingBR8MVV-UD8/
function solution($a) {
    $max = $max_global = 0;
    for ($i=0; $i<sizeof($a); $i++) {
        $max = max($a[$i], $max + $a[$i]);
        $max_global = max($max, $max_global);
    }

    return $max_global;
}
