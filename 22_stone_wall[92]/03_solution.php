<?php
// score: 92
// correctness: 100
// performance: 88
// https://app.codility.com/demo/results/training6MPJFV-XWS/
// start: 15:04
// end: 15:35
function solution($h) {
    $smallest = $h[0];
    $biggest = $h[0];
    $count = 0;
    $vals = [$h[0] => $h[0]];

    for ($i=1; $i<sizeof($h); $i++) {
        if ($h[$i] > $biggest) {
            $biggest = $h[$i];
            $vals[$h[$i]] = $h[$i];
            continue;
        }

        if ($h[$i] < $smallest) {
            $smallest = $h[$i];
            $biggest = $h[$i];
            $count += sizeof($vals);
            $vals = [$h[$i] => $h[$i]];
            continue;
        }

        if (
            $h[$i] >= $smallest &&
            $h[$i] <= $biggest
        ) {
            foreach($vals as $key => $val) {
                if ($val > $h[$i]) {
                    $count++;
                    unset($vals[$key]);
                }
            }
            $vals[$h[$i]] = $h[$i];
        }
    }

    return $count + sizeof($vals);
}
