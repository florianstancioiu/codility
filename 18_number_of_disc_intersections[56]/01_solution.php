<?php
// 12
function solution($a) {
    $size = sizeof($a);
    $count = 0;
    $position = 0;
    $i = 1;
    $intervals = [];

    while ($position < $size - 1) {
        $p_interval = isset($intervals[$position]) ? $intervals[$position] : [
            "start" => $position - $a[$position],
            "end" => $position + $a[$position]
        ];

        while ($i < $size) {
            $i_interval = isset($intervals[$i]) ? $intervals[$i] : [
                "start" => $i - $a[$i],
                "end" => $i + $a[$i]
            ];

            if (! isset($intervals[$i])) {
                $intervals[$i] = $i_interval;
            }

            if ($p_interval["end"] > $i_interval["start"]) {
                $count++;
            }

            if ($count > 10000000) {
                return -1;
            }

            $i++;
        }
        $position++;
        $i = $position + 1;
    }

    return $count;
}
