<?php
// score: 0
// correctness: 0
// performance: 0
// link: https://app.codility.com/demo/results/trainingBSP6D6-AMJ/

function solution($a)
{
    $b = array_unique($a);
    sort($b);
    $size = sizeof($b);

    for ($i = 0; $i<$size - 2; $i++) {
        if ($b[$i] + $b[$i + 1] > $b[$i + 2]) {
            return 1;
        }
    }

    return 0;
}
