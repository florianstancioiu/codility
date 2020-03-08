<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/trainingFDNYFU-BUV/
function solution($n) {
    if ($n === 1) {
        return 1;
    }

    $total = 0;
    $i = 1;
    while ($i * $i < $n) {
        if ($n % $i === 0) {
            $total +=2;
        }
        $i++;
    }

    if ($i * $i === $n) {
        $total +=1;
    }

    return $total;
}
