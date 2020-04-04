<?php
// score: 40
// correctness: 40
// performance: 40
// link: https://app.codility.com/demo/results/trainingDXBC2S-QE2/

function solution($m, $a)
{
    $size = sizeof($a);
    $count = $size;
    $temp = [];
    $front_index = 0;
    $last_permutation_index = null;

    if ($size === 1) {
        return 1;
    }

    for ($i = 0; $i<$size; $i++) {
        if ($count > 1000000000) {
            break;
        }

        $item = $a[$i];
        $temp[$item] = $item;

        while ($front_index < $size) {
            $front_index += 1;
            $front_item = $a[$front_index];

            if (isset($temp[$front_item])) {
                $count += get_permutations($temp);
                $last_permutation_index = $i;
                $temp = [];

                if ($front_index !== $size - 1) {
                    $temp[$front_item] = $front_item;
                    $i = $front_index;
                }

                break;
            } else {
               $temp[$front_item] = $front_item;
            }

            if ($front_index === $size - 1) {
                $count += get_permutations($temp);
                $last_permutation_index = $i;
                $temp = [];

                break 2;
            }
        }

        if ($front_index === $size - 1 && $last_permutation_index === $front_index) {
            //$temp = [];
            break;
        }
    }

    print_r(sizeof($temp));
    print_r("\n");
    print_r($last_permutation_index);
    print_r("\n");
    print_r("-----------------");

    if (sizeof($temp) === 1 && $last_permutation_index < $size) {
        $count += get_permutations($temp);
    }

    return $count > 1000000000 ? 1000000000 : $count;
}

function get_permutations(array $temp) : int
{
    $items_size = sizeof($temp);

    $permutations = ($items_size * ($items_size + 1)) / 2;

    return $permutations - $items_size;
}
