<?php
// 44
function solution($x, $y, $d) {
    $increments = 0;
    while($x < $y) {
        $x += $d;
        $increments++;
    }

    return $increments;
}
