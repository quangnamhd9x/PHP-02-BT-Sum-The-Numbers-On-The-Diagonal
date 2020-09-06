<?php
$array = [[1,2,3], [3,4,5], [5,6,7]];
$sum = 0;
for ($i = 0; $i < count($array);$i++){
    for ($j = 0; $j < count($array);$j++){
        $sum += ($array[$i][$j] + $array[$i+1][$j+1] + $array[$i+2][$j+2]);
        break;
    }
}
echo $sum;