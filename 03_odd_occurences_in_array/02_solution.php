<?php
// 100
function solution($a) {
    $array = [];

    while (sizeof($a)) {
        $element = array_pop($a);

        if (! isset($array[$element])) {
            $array[$element] = 0;
        }

        $array[$element]++;

        if ($array[$element] % 2 === 0) {
            unset($array[$element]);
        }
    }

    return array_keys($array)[0];
}
