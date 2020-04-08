<?php
// score:
// correctness:
// performance:
// link: UNSUBMITTED
// YES, I cheated, I just didn't know the solution so I looked it up so I can memorize it

function solution($a)
{
    sort($a);
    $size = sizeof($a);
    for ($i = 0; $i<$size-2; $i++) {
        $p = $a[$i];
        $q = $a[$i + 1];
        $r = $a[$i + 2];

        if ($p + $q > $r) {
            $count++;

            print_r("$p, $q, $r");
            print_r("\n");
        }
    }

    return $count;
}
