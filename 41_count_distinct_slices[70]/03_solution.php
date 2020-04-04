<?php
// score: 30
// correctness: 40
// performance: 20
// link: https://app.codility.com/demo/results/trainingHKGGPS-VZ5/

function solution($m, $a)
{
    $size = sizeof($a);
    $count = 0;
    $temp = []; // [$value => $value_count]

    for ($i = 0; $i<$size; $i++) {
        $item = $a[$i];

        if ($count > 1000000000) {
            $break;
        }

        if (isset($temp[$item])) {
            $count += get_permutations($temp);
            $temp = [];
        }

        $temp[$item] = 1;
    }

    $count += get_permutations($temp);

    return $count > 1000000000 ? 1000000000 : $count;
}

function get_permutations(array $temp) : int
{
    $items_size = sizeof($temp);

    return ($items_size * ($items_size + 1)) / 2;
}
