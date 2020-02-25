<?php
// score: 100
// correctness: 100
// performance: 100
// link: https://app.codility.com/demo/results/training29PS9P-E4T/
// start: 19:13
// end: 19:15
function solution($a) {
    $leader = leader($a);
    $size = sizeof($a);
    $leader_counts = [];

    if (is_null($leader)) {
        return 0;
    }

    // create the leader count array
    $count = 0;
    for ($i = 0; $i<$size; $i++) {
        if ($a[$i] === $leader) {
            $count++;
        }
        $leader_counts[$i] = $count;
    }

    // count the number of equileaders
    $equileader = 0;
    for ($i = 0; $i<$size; $i++) {
        if (
            // is leader up to $i
            $leader_counts[$i] > (($i + 1)/ 2) &&
            // is leader from $i to $size
            ($leader_counts[$size - 1] - $leader_counts[$i]) > ($size - ($i + 1)) / 2
        ) {
            $equileader++;
        }
    }

    return $equileader;
}

function leader(&$a) {
    $vals = [];

    for ($i = 0; $i<sizeof($a); $i++) {
        if (! isset($vals[$a[$i]])) {
            $vals[$a[$i]] = 1;
        } else {
            $vals[$a[$i]] += 1;
        }

        if ($vals[$a[$i]] > (sizeof($a) / 2)) {
            return $a[$i];
        }
    }

    return null;
}
