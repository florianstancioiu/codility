<?php
// 75
function solution($a) {
    $size = sizeof($a) - 1;
    if ($size < 2) {
        return 0;
    }

    $nothing_found = true;
    $p_index = 0;
    $q_index = 1;
    $r_index = 2;

    $p = $a[$p_index];
    $q = $a[$q_index];
    $r = $a[$r_index];

    if ($p+$q>$r && $r+$p>$q && $q+$r>$p) {
        return 1;
    }

    while ($p_index < $size - 1) {
        if ($p+$q>$r && $r+$p>$q && $q+$r>$p) {
            return 1;
        }

        if ($r_index != $size) {
            $r_index +=1;
            $r = $a[$r_index];
            continue;
        }

        if ($q_index != $size - 1) {
            $q_index +=1;
            $r_index = $q_index + 1;
            $q = $a[$q_index];
            $r = $a[$r_index];
            continue;
        }

        if ($p_index < $size - 2) {
            $p_index +=1;
            $q_index = $p_index + 1;
            $r_index = $q_index + 1;
            $p = $a[$p_index];
            $q = $a[$q_index];
            $r = $a[$r_index];
            continue;
        }

        break;
    }

    return 0;
}
