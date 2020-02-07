// 62

function solution($s, $p, $q) {
    $a = [];
    $b = [];

    for ($i = 0; $i<sizeof($p); $i++) {
        $min = null;
        for ($j=$p[$i]; $j<=$q[$i]; $j++) {

            if (! isset($a[$j])) {
                if ($s[$j] === "A") {
                    $a[$j] = 1;
                }

                if ($s[$j] === "C") {
                    $a[$j] = 2;
                }

                if ($s[$j] === "G") {
                    $a[$j] = 3;
                }

                if ($s[$j] === "T") {
                    $a[$j] = 4;
                }
            }


            if (is_null($min)) {
                $min = $a[$j];
            }
            if ($a[$j] === 1) {
                $min = 1;
                break;
            }

            if ($min > $a[$j]) {
                $min = $a[$j];
            }
        }
        $b[$i] = $min;
    }

    return $b;
}
