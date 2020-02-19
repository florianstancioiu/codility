// 66
function solution($a) {
    $size = sizeof($a) - 1;
    sort($a);
    
    if ($size === 2) {
        return $a[0] * $a[1] * $a[2];
    }
    
    $small = array_splice($a, 0, 3);
    $big = array_splice($a,-3,3);
    
    for ($i=0; $i<2; $i++) {
        if ($small[$i] === 0) {
            unset($small[$i]);
        }
        
        if (isset($big[$i]) && $big[$i] === 0) {
            unset($big[$i]);
        }
    }
    
    
    $vals = array_merge($small, $big);
    $size = sizeof($vals) - 1;
    
    if ($vals[0] * $vals[1] > ($vals[$size] * $vals[$size -1])) {
        return $vals[0] * $vals[1] * $vals[$size];
    }
    
    return $vals[$size] * $vals[$size - 1] * $vals[$size - 2];
}
