// 88 
function solution($a) {
    $size = sizeof($a) - 1;
    sort($a);
    
    if ($size === 2) {
        return $a[0] * $a[1] * $a[2];
    }
    
    $small = array_splice($a, 0, 3);
    $big = array_splice($a,-3,3);
    
    $vals = array_merge($small, $big);
    $size = sizeof($vals) - 1;
    $negative_nrs = true;
    
    // check if all elements are negative
    for ($i=0; $i<$size; $i++) {
        if ($vals[$i] >= 0) {
            $negative_nrs = false;
            break;
        }
    }
    
    if ($negative_nrs) {
        return $vals[$size] * $vals[$size - 1] * $vals[$size - 2];
    }
    
    if ($vals[0] * $vals[1] >= ($vals[$size] * $vals[$size -1])) {
        return $vals[0] * $vals[1] * $vals[$size];
    }
    
    return $vals[$size] * $vals[$size - 1] * $vals[$size - 2];
}

