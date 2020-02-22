<?php
// 72
function solution($x, $a) {
    $vals = [];

    for ($i = 0; $i< sizeof($a); $i++) {
        if (in_array($a[$i], $vals)) {
            continue;
        }

        $vals[] = $a[$i];
        if (sizeof($vals) === $x) {
            return $i;
        }
    }

    return -1;
}
