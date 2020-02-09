// 0

function solution($a) {
    $sum = [];
    $avg_a = [];
    $min_position = null;
    $min_avg = null;

    for ($i = 0; $i < sizeof($a); $i++) {
        if ($i === 0) {
            $sum[$i] = $a[$i];
        } else {
            $sum[$i] = $sum[$i-1] + $a[$i];
        }

        if (is_null($min_avg)) {
            $min_avg = $sum[$i] / ($i + 1);
            $min_position = $i;
        }

        $avg = $sum[$i] / ($i + 1);
        $avg_a[$i] = $avg;

        if ($avg < $min_avg) {
            $min_avg = $avg;
            $min_position = $i;
        }
    }

    return $min_position;
}

// to test:
// [-3, -5, -8, -4, -10]
// [1000, -1000]
