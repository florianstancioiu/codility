/***
result: 44%

***/

function solution($a) {
    $size = sizeof($a);
    $smallest_number = $size + 1;

    for($i = 0; $i<$size; $i++) {
        if (! in_array($i, $a) && $i < $smallest_number && $i > 0) {
            $smallest_number  = $i;
        }
    }

    return $smallest_number;
}
