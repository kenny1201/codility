function solution($N) {
    $remain = $N;
    $result = [];
    while($remain > 0) {
        $result[] = $remain % 2;
        $remain = floor($remain / 2);
    }
    $reverse = array_reverse($result);
    $position = [];
    foreach($reverse as $index => $value){
        if($value == 1)
            $position[] = $index;
    }
    $length = count($position);
    $final = 0;
    for($i = 0; $i < $length; $i++){
        if($i == 0){
            continue;
        }
        else{
            $gap = $position[$i] - $position[$i - 1] - 1;
            $final = $final < $gap ? $gap : $final;
        }
    }
    return $final;  
}