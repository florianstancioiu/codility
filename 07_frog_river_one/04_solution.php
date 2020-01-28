/***
result: 100
***/

function solution($x, $a) {
    $vals = [];
    $size = sizeof($a);

    for ($i = 0; $i<$size; $i++) {
        $k = $a[$i];
        $vals[$k] = $k;
        if (sizeof($vals) === $x) {
            return $i;
        }
    }

    return -1;
}
