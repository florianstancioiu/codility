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

    for ($i = 0; $i<$size; $i++) {
        $r_index = $i + 2;

        for ($j = $i + 1; $j<$size; $j++) {
            while ($r_index < $size && ($a[$i] + $a[$j]) < $a[$r_index]) {
                $r_index++;
            }

            $count + = $r_index - $j - 1;
        }
    }

    return $count;
}
