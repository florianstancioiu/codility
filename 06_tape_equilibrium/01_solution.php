/***

result: 46%

***/

function solution($a) {
    $lowest_difference = $array_sum = array_sum($a);
    $left_sum = 0;

    for ($i=0; $i<sizeof($a); $i++) {
        $left_sum += $a[$i];
        $right_sum = $array_sum - $left_sum;

        $abs_difference = abs($left_sum - $right_sum);
        if ($abs_difference < $lowest_difference) {
            $lowest_difference = $abs_difference;
        }
    }

    return $lowest_difference;
}
