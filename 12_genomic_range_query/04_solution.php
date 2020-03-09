<?php
// 62
function solution($s, $p, $q) {
    $val_array = [
        "A" => 1,
        "C" => 2,
        "G" => 3,
        "T" => 4
    ];
    $b = [];

    $calcs = [];
    for ($i = 0; $i<sizeof($p); $i++) {
        $calcs[$i] = [
            "starts_at" => $p[$i],
            "ends_at" => $q[$i],
            "min" => null,
        ];
    }

    for ($i = 0; $i<=strlen($s); $i++) {
        foreach($calcs as $key => &$calc) {
            if ($i > $calc["ends_at"] || $i < $calc["starts_at"]) {
                continue;
            }

            $val = $val_array[$s[$i]];
            if (is_null($calc["min"])) {
                $calc["min"] = $val;
            }

            if ($val === 1) {
                $calc["min"] = 1;
                $calc["ends_at"] = $i;
            }

            if ($calc["min"] > $val) {
                $calc["min"] = $val;
            }

            if ($calc["ends_at"] === $i) {
                $b[$key] = $calc["min"];
                unset($calcs[$key]);
            }
        }
    }

    return $b;
}
