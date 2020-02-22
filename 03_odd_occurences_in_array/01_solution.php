<?php 
// 44
function solution($a) {
    while(sizeof($a) !== 0) {
        $last_element = array_pop($a);

        if ($key = array_search($last_element, $a) === false) {
            return $last_element;
        } else {
            unset($a[$key]);
        }
    }
}
