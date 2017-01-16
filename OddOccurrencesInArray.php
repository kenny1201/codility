function solution($A) {
    if(empty($A))
        return 0;
    $tmp = [];
    foreach($A as $index => $value){
        if(isset($tmp[$value]))
            unset($tmp[$value]);
        else
            $tmp[$value] = $index;
    }
    $result = array_flip($tmp);
    return array_shift($result);
}