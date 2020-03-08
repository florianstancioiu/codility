<?php
// score: 35
// correctness: 50
// performance: 16
// link: https://app.codility.com/demo/results/training36CWN9-FBK/
function solution($n) {
    $total = 0;
    $i = 1;
    while ($i * $i <= $n) {
        if ($n % $i === 0) {
            $total +=2;
        }
        $i++;
    }
    return $total;
}
