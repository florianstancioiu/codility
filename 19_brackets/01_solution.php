<?php
// 100
function solution ($s) {
    if (strlen($s) % 2 === 1) {
        return 0;
    }

    $a = [
        "(" => 1,
        "[" => 2,
        "{" => 3,
        ")" => -1,
        "]" => -2,
        "}" => -3
    ];

    $sums = [
        0 => 0,
        1 => 0,
        2 => 0
    ];

    for ($i = 0; $i<strlen($s); $i++) {
        $char = $s[$i];

        if (
            $i < strlen($s) -1 &&
            $i !== 0 &&
            $a[$s[$i - 1]] > 0 &&
            $a[$char] < 0 &&
            $a[$s[$i - 1]] + $a[$char] !== 0
        ) {
            return 0;
        }

        if (abs($a[$char]) === 1) {
            if (($a[$char] + $sums[0]) < 0) {
                return 0;
            }
            $sums[0] = $a[$char] + $sums[0];
        }

        if (abs($a[$char]) === 2) {
            if ($a[$char] + $sums[1] < 0) {
                return 0;
            }
            $sums[1] = $a[$char] + $sums[1];
        }

        if (abs($a[$char]) === 3) {
            if ($a[$char] + $sums[2] < 0) {
                return 0;
            }
            $sums[2] = $a[$char] + $sums[2];
        }
    }

    print_r($sums);

    if ($sums[0] + $sums[1] + $sums[2] !== 0) {
        return 0;
    }

    return 1;
}


echo solution("{[()()]}");
