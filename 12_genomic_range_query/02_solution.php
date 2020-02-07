// 62

function solution($s, $p, $q) {
    $a = [];
    $b = [];

    for ($i = 0; $i<strlen($s); $i++) {
        if ($s[$i] === "A") {
            $a[$i] = 1;
        }

        if ($s[$i] === "C") {
            $a[$i] = 2;
        }

        if ($s[$i] === "G") {
            $a[$i] = 3;
        }

        if ($s[$i] === "T") {
            $a[$i] = 4;
        }
    }

    for ($i = 0; $i<sizeof($p); $i++) {
        $min = null;
        for ($j=$p[$i]; $j<=$q[$i]; $j++) {
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
