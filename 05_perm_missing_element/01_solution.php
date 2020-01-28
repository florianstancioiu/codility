/****

result: 50

****/
function solution($a) {
    sort($a);

    $i = 0;
    while ($i < sizeof($a)) {
        if ($a[$i] !== $i + 1) {
            return $i + 1;
        }
        $i++;
    }
}
