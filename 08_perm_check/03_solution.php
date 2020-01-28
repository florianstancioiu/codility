/***

result: 75

***/

function solution($a) {
    $b = [];
    $size = sizeof($a);
    $expected_sum = ($size * ($size + 1)) / 2;
    $sum = 0;

    for ($i = 0; $i<sizeof($a); $i++) {
        if (isset($b[$a[$i]])) {
            return 0;
        }

        $sum += $a[$i];
    }

    if ($expected_sum === $sum) {
        return 1;
    }

    return 0;
}
