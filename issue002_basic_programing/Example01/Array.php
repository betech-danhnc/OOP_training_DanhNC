<?php

/* 
 * Description of multidimensional array
 * Find the max value
 * @author DanhNC
 */

$arrVal = array(
    [1, 4, 7, 8, 9],
    [2, 21, 5, 8, 11],
    [11, 2, 3, 6, 6],
    [1, 2, 77, 2, 3],
    [2, 4, 6, 8, 10]
);
$max = $arrVal[0][0];
$iMax = 0;
$jMax = 0;
foreach ($arrVal as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if($max < $value2){
            $max = $value2;
            $iMax = $key;
            $jMax = $key2;
        }
    }
}

echo $max . $iMax . $jMax;

