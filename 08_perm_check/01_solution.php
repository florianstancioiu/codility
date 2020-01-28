/***
result: 83
***/

function solution($a) {
    $n = array_unique($a);

    if (sizeof($n) !== $size = sizeof($a)) {
        return 0;
    }

    if (array_sum($a) === ($size * ($size + 1)) / 2) {
        return 1;
    }

    return 0;
}
