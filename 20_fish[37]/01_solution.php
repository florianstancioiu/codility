<?php
// 37
function solution($a, $b) {
    $sum = null;
    $last_key = null;
    while ($sum !== 0 && $sum !== sizeof($b)) {
        $sum = 0;
        foreach ($b as $key => $val) {
            if ($last_key === null) {
                $last_key = $key;
                continue;
            }

            if ($b[$last_key] === 1 && $val === 0) {
                if ($a[$last_key] > $a[$key]) {
                    unset($b[$key]);
                    $sum += $b[$last_key];
                } else {
                    unset($b[$last_key]);
                    $last_key = $key;
                    $sum += $b[$key];
                }
                continue;
            }

            $last_key = $key;
        }
    }

    return sizeof($b);
}
