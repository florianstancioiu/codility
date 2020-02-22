<?php
// 75
function solution($a, $b, $k) {
    if ($a === $b) {
        return (int) ($a % $k === 0);
    }

    if (($b - $a) < $k) {
        return 0;
    }

    return (int) floor(($b - $a) / $k) + 1;
}
