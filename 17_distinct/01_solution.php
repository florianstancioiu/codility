// 100
function solution($a) {
    $distinct = [];

    for($i=0; $i<sizeof($a); $i++) {
        $distinct[$a[$i]] = $a[$i];
    }

    return sizeof($distinct);
}
