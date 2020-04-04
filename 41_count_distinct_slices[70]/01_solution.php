<?php
// score: 70
// correctness: 100
// performance: 40
// link: https://app.codility.com/demo/results/trainingHKGGPS-VZ5/

function solution($m, $a)
{
    $size = sizeof($a);
    $count = 0;
    $current_items = []; // [$value => $value_count]

    for ($i = 0; $i<$size; $i++) {
        // reset current items array
        $current_items = [];

        // retrieve first item
        $first_item = $a[$i];

        // set first item
        // and increment count
        if (! isset($current_items[$first_item])) {
            $current_items[$first_item] = 1;
            $count++;
        }

        for ($j = $i + 1; $j < $size; $j++) {
            print_r($current_items);
            print_r("\n");
            print_r("-------------------------");

            $last_item = $a[$j];

            if (isset($current_items[$last_item])) {
                break;
            }

            $current_items[$last_item] = 1;
            $count++;

            if ($count > 1000000000) {
                return 1000000000;
            }
        }
    }

    return $count;
}
