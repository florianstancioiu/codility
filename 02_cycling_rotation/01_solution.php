
/***

    result: 87%

***/

function solution($a, $k) {
    for ($i = 0; $i < $k; $i++) {
        $last_element = array_pop($a);
        array_unshift($a, $last_element);
    }
    
    return $a;
}

