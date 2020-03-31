<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/trainingPY879N-ARB/

function solution($a)
{
    $counts = [];
    $total_size = sizeof($a);
    $size = floor($total_size / 2) + 1;
    for ($i = 0; $i<$size; $i++) {
        $element_start = abs($a[$i]);
        $element_end = abs($a[$total_size - $i]);

        $counts[$element_start] = 1;
        $counts[$element_end] = 1;
    }

    return sizeof($counts);
}
