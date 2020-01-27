<?php 

/*

    result: 

    100%
*/

function solution($n) {
    $longest_gap = 0;
    $current_gap = 0;
    $start_increment = false;
    
    while ($n != 0) {
        $binary_n = $n%2;
        $n = (int) $n / 2;    

        if ($binary_n === 1) {
            if ($current_gap > $longest_gap) {
                $longest_gap = $current_gap;
            }
            $current_gap = 0;
            $start_increment = true;
            
            continue;
        }

        if ($start_increment === true) {
            $current_gap++;    
        }
    }

    return $longest_gap;
}

