// 25%
function solution($a, $b, $k) {
    if (($b - $a) < $k || $a === $b) {
        return 0;
    }
    return (int) round(($b - $a) / $k);
}
