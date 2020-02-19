// 44
function solution($a) {
    $size = sizeof($a) - 1;
    sort($a);
    
    return $a[$size] * $a[$size - 1] * $a[$size - 2];
}
