<?php
// score: 23
// correctness: 16
// performance: 28
// link: https://app.codility.com/demo/results/trainingJ672YJ-D85/

// NOTE: My whole algorithm crashes and burns because the third variable can appear inside the biggest sub slice
function solution($a) {
    if (sizeof($a) === 3) {
        return 0;
    }

    $max = $max_global = $a[0];
    $max_slice_end = 0;

    for ($i = 1; $i<sizeof($a) - 1; $i++) {
        $max = max($a[$i], $max + $a[$i]);
        if ($max > $max_global) {
            $max_global = $max;
            $max_slice_end = $i;
        }
    }

    // find max_global_startin_index
    $max_slice_start = $max_slice_end;
    $sum = $max_global;
    while ($sum > 0 && $max_slice_start >= 0) {
        $sum -= $a[$max_slice_start];
        $max_slice_start--;
    }

    // adjust the slice indexes
    if ($max_slice_start !== 0) {
        $max_slice_start--;
    }
    if ($max_slice_end !== sizeof($a)) {
        $max_slice_end++;
    }

    // we have the indexes of the biggest slice in the entire array
    // we need to find the third point which represents the max slice sum
    // starting from $max_slice_start down to 0 or $max_slice_end up to n
    // compute both (if possible) and take the max of that
    $left_index = left_side_index($a, $max_slice_start);
    $right_index = right_side_index($a, $max_slice_end);

    return sum($left_index, $right_index, $max_global);
}

function left_side_index(array &$a, int $limit) : array {
    if ($limit === 0) {
        return [
            "index" => 0,
            "value" => null
        ];
    }

    $prefix_sums = [ 0 => $a[0] ];
    $min = $prefix_sums[0];
    $min_index = 0;

    for ($i = 1; $i<$limit; $i++) {
        $prefix_sums[$i] = $prefix_sums[$i - 1] + $a[$i];

        if ($prefix_sums[$i] < $min) {
            $min = $prefix_sums[$i];
            $min_index = $i;
        }
    }

    $sum = 0;
    for ($i = $min_index + 1; $i<$limit; $i++) {
        $sum += $a[$i];
    }

    return [
        "index" => $min_index,
        "value" => $sum
    ];
}

function right_side_index(array &$a, int $limit) : array {
    if ($limit === sizeof($a)) {
        return [
            "index" => $limit,
            "value" => null
        ];
    }

    $prefix_sums = [$limit => $a[$limit]];
    $max = $a[$limit];
    $max_index = $limit;

    for ($i = $limit+1 ;$i<sizeof($a); $i++) {
        $prefix_sums[$i] = $prefix_sums[$i - 1] + $a[$i];

        if ($prefix_sums[$i] > $max) {
            $max = $prefix_sums[$i];
            $max_index = $i;
        }
    }

    $sum = 0;
    for ($i = $limit; $i<$max_index; $i++) {
        $sum += $a[$i];
    }

    return [
        "index" => $max_index,
        "value" => $sum
    ];
}

function sum(array $left, array $right, int $sum) : int {
    if (is_null($left["value"])) {
        return $sum + $right["value"];
    }

    if (is_null($right["value"])) {
        return $sum + $left["value"];
    }


    return max($right["value"], $left["value"]) + $sum;
}
