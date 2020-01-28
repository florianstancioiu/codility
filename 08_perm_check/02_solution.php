/***
result: 75
***/

function solution($a) {
    $size = sizeof($a);

    if (array_sum($a) === ($size * ($size + 1)) / 2) {
        return 1;
    }

    return 0;
}
