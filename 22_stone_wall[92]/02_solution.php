<?php
// score: 50
// correctness: 80
// performance: 33
// https://app.codility.com/demo/results/trainingSK523V-XUH/
// start: 13:47
// end: 14:38
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
            $count += sizeof($vals);
            $vals = [$h[$i] => $h[$i]];
            continue;
        }

        if ($h[$i] > $smallest && $h[$i] < $biggest && !isset($vals[$h[$i]])) {
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
