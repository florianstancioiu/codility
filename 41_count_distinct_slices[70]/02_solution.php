<?php
// score: --
// correctness: --
// performance: --
// link: UNTESTED / ABBANDONDED

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


            $last_item = $a[$j];

            if (isset($current_items[$last_item])) {
                $current_items_size = sizeof($current_items);

                if ($current_items_size > 1) {
                    $permutations = ($current_items_size * ($current_items_size + 1)) / 2;
                    $count += $permutations;
                }

                $i = $j + 1;

                print_r($current_items);
                print_r("\n");
                print_r("count: " . $count);
                print_r("\n");
                print_r("-------------------------");

                break 2;
            }

            print_r($current_items);
            print_r("\n");
            print_r("-------------------------");

            $current_items[$last_item] = 1;
            $count++;

            if ($count > 1000000000) {
                return 1000000000;
            }
        }
    }

    return $count;
}
