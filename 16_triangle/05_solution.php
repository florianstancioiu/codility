<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/trainingGEBWK9-WNB/

function solution($a)
{
    sort($a);
    $size = sizeof($a);

    for ($i = 0; $i<$size - 2; $i++) {
        if ($a[$i] + $a[$i + 1] > $a[$i + 2]) {
            return 1;
        }
    }

    return 0;
}
