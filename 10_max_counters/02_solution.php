// 33

function solution($n, $a) {
    $b = $initial_array = array_fill(0, $n, 0);
    $max = 0;
    $add_to_each = 0;

    for($i=0; $i<sizeof($a); $i++) {
        $k = $a[$i];
        if ($k <= $n) {
            if (!isset($b[$k-1])) {
                $b[$k-1] = 0;
            }
            $b[$k-1]++;

            if ($max < $b[$k-1]) {
                $max = $b[$k-1];
            }
        }

        if ($k === $n + 1) {
            $add_to_each += $max;
            $b = $initial_array;
        }
    }

    for($i=0; $i<$n; $i++) {
        $b[$i] += $add_to_each;
    }

    return $b;
}
