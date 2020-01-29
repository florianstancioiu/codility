/***
result: 100
***/

function solution($a) {
    $size = sizeof($a);
    $b = [];

    for($i = 0; $i<$size; $i++) {
        $n = $a[$i];
        if ($n < 0) {
            continue;
        }

        $b[$n] = $n;
    }

    if (sizeof($b) === 0) {
        return 1;
    }

    for ($i = 1; $i<sizeof($b) + 1; $i++) {
        if (! isset($b[$i])) {
            return $i;
        }
    }

    return sizeof($b) + 1;
}
