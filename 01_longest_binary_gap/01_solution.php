<?php
// 40
function solution($n) {
    $longest_gap = 0;
    $current_gap = 0;
    $start_increment = false;
    $binary_representation = [];

    while ($n != 0) {
        $binary_n = (int) $n%2;
        $n = (int) $n / 2;
        $binary_representation[] = $binary_n;

        if ($binary_n === 1) {
            if ($current_gap > $longest_gap) {
                $longest_gap = $current_gap;
            }
            $current_gap = 0;
            $start_increment = true;

            continue;
        }

        if ($start_increment === true) {
            $current_gap++;
        }
    }

    $binary_representation = array_reverse($binary_representation);

    return [
        $longest_gap,
        ltrim(implode("", $binary_representation), 0)
    ];
}

$array = [
    50,
    10,
    32,
    15,
    20,
    99,
    12
];

echo "<pre>";
foreach ($array as $n) {
	echo $n . "  -> " . solution($n)[1] . "   -> " . solution($n)[0] . "<br/>";
}

?>
