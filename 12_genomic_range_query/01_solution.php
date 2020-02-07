<?php
//  12 ... pula mea

function solution($s, $p, $q) {
    $a = [];
    $b = [];

    for ($i = 0; $i<strlen($s); $i++) {
        if (strtolower($s[$i]) === "a") {
            $a[$i] = 1;
        }

        if (strtolower($s[$i]) === "c") {
            $a[$i] = 2;
        }

        if (strtolower($s[$i]) === "g") {
            $a[$i] = 3;
        }

        if (strtolower($s[$i]) === "t") {
            $a[$i] = 4;
        }
    }

    for ($i = 0; $i<sizeof($p); $i++) {
        $min = 4;
        for ($j=$p[$i]; $j<$q[$i]; $j++) {
            if ($a[$j] === 1) {
                $min = 1;
                break;
            }

            if ($min > $a[$j]) {
                $min = $a[$j];
            }
        }
        $b[$i] = $min;
    }

    return $b;
}
