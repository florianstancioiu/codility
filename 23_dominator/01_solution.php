<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/trainingFUJY6D-A3P/
// start: 17:25
// end: 17:39
function solution($a) {
    $vals = [];

    for ($i = 0; $i<sizeof($a); $i++) {
        if (! isset($vals[$a[$i]])) {
            $vals[$a[$i]] = 1;
        } else {
            $vals[$a[$i]] += 1;
        }

        if ($vals[$a[$i]] > (sizeof($a) / 2)) {
            return $i;
        }
    }

    return -1;
}
