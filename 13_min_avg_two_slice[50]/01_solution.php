// 50

function solution($a) {
    $sums = [];
    $min = null;
    $min_pos = 0;



    for ($i = 0; $i<sizeof($a) - 1; $i++) {
        $sums[$i] = $a[$i] + $a[$i + 1];

        if (is_null($min)) {
            $min = $sums[$i];
        }

        if ($min > $sums[$i]) {
            $min = $sums[$i];
            $min_pos = $i;
        }
    }

    return $min_pos;
}
