/***

result: 100

***/

function solution($a) {
    $lowest_difference = null;
    $array_sum = array_sum($a);
    $left_sum = 0;

    for ($i=0; $i<sizeof($a) - 1; $i++) {
        $left_sum += $a[$i];
        $right_sum = $array_sum - $left_sum;
        $abs_difference = abs($left_sum - $right_sum);

        if (is_null($lowest_difference)) {
            $lowest_difference = $abs_difference;
        }

        if ($abs_difference < $lowest_difference) {
            $lowest_difference = $abs_difference;
        }
    }

    return $lowest_difference;
}
