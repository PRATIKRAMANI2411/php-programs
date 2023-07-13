<?php 

$array = array(100,344,675,50,67,678,701,654,685,701);
$max = 0;
$secMax = 0;

for ($i=0; $i < count($array); $i++) {
    if($array[$i] > $max){
        $secMax = $max;
        $max = $array[$i];
    } elseif($array[$i] > $secMax && $array[$i] != $max){
        $secMax = $array[$i];
    }
}

echo '<pre>';print_r('Max :- '. $max);echo '</pre>';
echo '<pre>';print_r('secMax :- ' . $secMax);echo '</pre>';

?>