function solution($A, $K) {
    if(empty($A))
        return $A;
    for($i=0;$i<$K;$i++){
        $val = array_pop($A);              
        array_unshift($A, $val);
    }
    return $A;
}