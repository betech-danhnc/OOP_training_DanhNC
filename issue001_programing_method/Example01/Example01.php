<?php

/* 
 * Description of structured programing
 * Program: Get max distance between two points
 * 
 * @author DanhNC
 */

/**
 * Value of x
 */
$arrX = array();
/**
 * Value of y
 */
$arrY = array();

/**
 * Input value of point
 * @global array $arrX
 * @global array $arrY
 */
function inputData(){
    global $arrX, $arrY;
    $arrX = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $arrY = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];   
}

/**
 * Get distance between two point
 * @global array $arrX
 * @global array $arrY
 * @param Int $i First point
 * @param Int $j Second point
 * @return Number
 */
function getDistance($i, $j){
    global $arrX, $arrY;
    return sqrt(pow($arrX[$i] - $arrX[$j], 2) + pow($arrY[$i] - $arrY[$j], 2));
}

/**
 * Get the longest distance between to points
 * @global array $arrX
 * @global array $arrY
 * @return Mixed
 */
function getMaxDistance(){
    global $arrX, $arrY;
    inputData();
    $maxDistance = getDistance(0, 0);
    $iMax = 0;
    $jMax = 0;
    for ($ii = 0; $ii < count($arrY) - 1; $ii++) {
        for ($jj = $ii + 1; $jj < count($arrY); $jj++) {
            $temp = getDistance($ii, $jj);
            if($maxDistance < $temp){
                $maxDistance = $temp;
                $iMax = $ii;
                $jMax = $jj;
            }
        }
    }
    return 'The longest distance between two points:' . $maxDistance . 
            '<br/>' . 'From point ( ' . $arrX[$iMax] . ',' . $arrY[$iMax] .
            ') to point (' . $arrX[$jMax] . ',' . $arrY[$jMax] . ')';
    
}

echo getMaxDistance();