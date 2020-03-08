<?php
// score: 80
// correctness: 80
// performance: 80
// link: https://app.codility.com/demo/results/trainingVF5EJH-CHY/
function solution($n) {
    $i = 1;
    $smallest_perimeter = 2 * ($n + $i);
    $i = 2;
    while ($i * $i < $n) {
        if ($n % $i === 0) {
            $x = $n / $i;
            $perimeter = 2 * ($x + $i);

            if ($perimeter < $smallest_perimeter) {
                $smallest_perimeter = $perimeter;
            }
        }
        $i++;
    }

    return $smallest_perimeter;
}
