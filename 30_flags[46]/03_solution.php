<?php
// score: 46
// correctness: 75
// performance: 14
// link: https://app.codility.com/demo/results/trainingMQRY5P-QDT/
function solution($a) {
    if (sizeof($a)<=2) {
        return 0;
    }

    $peaks = [];
    for ($i = 1; $i<sizeof($a) -1; $i++) {
        if ($a[$i] > $a[$i -1] && $a[$i] > $a[$i + 1]) {
            $peaks[] = $i;
        }
    }

    $total_peaks = sizeof($peaks);
    $max_flags = 0;

    if ($total_peaks <= 1) {
        return $total_peaks;
    }

    for ($i = $total_peaks; $i>=$total_peaks/2; $i--) {
        $flags = [$peaks[0]];
        $current_flags = 1;
        for ($j = 1; $j<$total_peaks; $j++) {
            if ($peaks[$j] - $flags[$current_flags - 1] - 1 >= $i) {
                $flags[] = $peaks[$j];
                $current_flags++;
            }
        }

        if ($current_flags === $i) {
            return $current_flags;
        }

        $max_flags = max($max_flags, $current_flags);
    }

    return $max_flags;
}
