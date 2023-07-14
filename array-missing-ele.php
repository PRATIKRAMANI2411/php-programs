<?php
$array1 = array(40,41,42,43,44,45,1,2,3,4,5,6,7,8,9,10,11,12,13,14,35,36,37,38,39,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,67,68,69,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,100);

function Myrange($start, $end){
    $ans = [];
    for($i=$start; $i<=$end; $i++){
        $ans[] = $i;
    }
    return $ans;
}
// $array2 = range(1,max($array1));
$array2 = Myrange(1,max($array1));
$missing = array_diff($array2, $array1);
// print_r($missing);
echo '<pre>';print_r($missing);echo '</pre>';

?>