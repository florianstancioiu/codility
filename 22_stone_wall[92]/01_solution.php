<?php
// score: 71
// correctness: 100
// performance: 55
// https://app.codility.com/demo/results/trainingVA46Z4-F4Z/
// start: 12:23
// end: 13:08
function solution($h) {
    $blocks = [];
    $count = 0;

    for ($i = 0; $i<sizeof($h); $i++) {
        $j = $i;
        while ($j !== sizeof($h) -1 && $h[$i] <= $h[$j + 1]) {
            $j++;
        }

        if (! isset($blocks[$j])) {
            $blocks[$j] = [];
        }

        if (! isset($blocks[$j][$h[$i]])) {
            $count++;
            $blocks[$j][$h[$i]] = [
                "height" => $h[$i],
                "start" => $i,
                "end" => $j
            ];
        }
    }

    return $count;
}
