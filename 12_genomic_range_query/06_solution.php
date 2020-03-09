<?php
// score: 75
// correctness: 60
// performance: 100
// link: https://app.codility.com/demo/results/trainingUFUBV2-T4Z/
function solution($s, $p, $q) {
    $factors = [
        "A" => 1,
        "C" => 2,
        "G" => 3,
        "T" => 4
    ];

    $a = 0;
    $c = 0;
    $g = 0;
    $t = 0;

    $sums = [];

    for ($i = 0; $i<strlen($s); $i++) {
        if ($s[$i] === "A") {
            $a++;
        }

        if ($s[$i] === "C") {
            $c++;
        }

        if ($s[$i] === "G") {
            $g++;
        }

        if ($s[$i] === "T") {
            $t++;
        }

        $sums[$i] = [
            "a" => $a,
            "c" => $c,
            "g" => $g,
            "t" => $t
        ];
    }

    $array = [];
    for ($i=0; $i<sizeof($p); $i++) {
        $start = $p[$i];
        $end = $q[$i];
        $sum_start = $sums[$start];
        $sum_end = $sums[$end];

        if ($start === $end) {
            $array[] = $factors[$s[$start]];
        }

        $sum = [
            "a" => $sum_end["a"] - $sum_start["a"],
            "c" => $sum_end["c"] - $sum_start["c"],
            "g" => $sum_end["g"] - $sum_start["g"],
            "t" => $sum_end["t"] - $sum_start["t"]
        ];

        if ($sum["a"] > 0) {
            $array[] = 1;
            continue;
        }

        if ($sum["c"] > 0) {
            $array[] = 2;
            continue;
        }

        if ($sum["g"] > 0) {
            $array[] = 3;
            continue;
        }

        if ($sum["t"] > 0) {
            $array[] = 4;
            continue;
        }
    }

    return $array;
}
