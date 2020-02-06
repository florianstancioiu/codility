// 100
function solution($n, $a) {
    $max = $add_to_each = 0;
    $b = [];

    for($i=0; $i<sizeof($a); $i++) {
        $k = $a[$i];
        if ($k <= $n) {
            if (! isset($b[$k-1])) {
                $b[$k-1] = 0;
            }

            $b[$k-1] += 1;

            if ($max < $b[$k-1]) {
                $max = $b[$k-1];
            }
        }

        if ($k === $n + 1) {
            $add_to_each += $max;
            $max = 0;
            $b = [];
        }
    }

    for ($i=0; $i<$n; $i++) {
        if (! isset($b[$i])) {
            $b[$i] = 0;
        }
        $b[$i] += $add_to_each;
    }

    return $b;
}
