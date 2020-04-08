<?php
// score:
// correctness:
// performance:
// link: UNSUBMITTED

function solution($a)
{
    $size = sizeof($a);
    $half_size = floor($size / 2) + 1;
    $count = 0;

    for ($i = 0; $i<$half_size; $i++) {
        $q_index = $size - $i;

        if ($i === $q_index) {
            continue;
        }

        $p = $a[$i];
        $q = $a[$q_index];

        for ($j = 0; $j<$size; $j++) {
            if ($j === $i || $j === $q_index || ($p + $q) <= $a[$j]) {
                continue;
            }

            if (($q + $a[$j]) > $p && ($a[$j] + $p) > $q) {
                $count++;

                print_r("($i, $q_index, $j)");
                print_r("\n");
            }
        }
    }

    return $count;
}
