<?php
// score: 62
// correctness: 100
// performance: 0
// link: https://app.codility.com/demo/results/trainingZE49DJ-8EF/
function solution($s, $p, $q) {
    $factors = [
        "A" => 1,
        "C" => 2,
        "G" => 3,
        "T" => 4
    ];

    $array = [];
    for ($i=0; $i<sizeof($p); $i++) {
        $start = $p[$i];
        $end = $q[$i];
        $min = $factors[$s[$start]];
        for ($j = $start; $j<=$end; $j++) {
            $item = $factors[$s[$j]];

            if ($item < $min) {
                $min = $item;
            }
        }
        $array[] = $min;
    }

    return $array;
}
