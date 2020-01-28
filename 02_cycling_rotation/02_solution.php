/***
    
    result: 100%

**/

function solution($A, $K) {
    if (sizeof($A) === 0) {
        return $A;
    } 
    
    for ($i = 0; $i < $K; $i++) {
        $last_element = array_pop($A);
        array_unshift($A, $last_element);
    }
    
    return $A;
}
