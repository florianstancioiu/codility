<?php
// score: 100
// correctness: 100
// performance: 100
// https://app.codility.com/demo/results/training5SVNX5-G49/
function solution($s) {
    if (strlen($s) % 2 === 1) {
        return 0;
    }

    $sum = 0;
    $a = [
        "(" => 1,
        ")" => -1
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $sum += $a[$s[$i]];

        if ($sum < 0) {
            break;
        }
    }

    return $sum === 0 ? 1 : 0;
}
