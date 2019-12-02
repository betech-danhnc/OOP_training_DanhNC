<?php
namespace issue001;
require_once 'Point.php';
use issue001\Point;
/* 
 * Description of list Point
 * 
 * @author DanhNC
 */

// Description of list points
class ListPoints{
    /**
     * Array of object Point
     * @var Point[]
     */
    public $points = [];
    public function __construct() {
        $arrX = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $arrY = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        for ($ii = 0; $ii < count($arrY); $ii++) {
            $this->points[] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }
    
    /**
     * Get value between two points
     * @param Int $i Input i
     * @param Int $j Input j
     * @return Number
     */
    public function getDistance($i,$j) {
        return sqrt(pow($this->points[$i]->x - $this->points[$j]->x, 2) + 
        pow($this->points[$i]->y - $this->points[$j]->y, 2));
    }
    
    /**
     * Get max distance between two points
     * @return Mixed
     */
    public function getMaxDistance() {
        $max = $this->getDistance(0, 1);
        $iMax = 0;
        $jMax = 1;
        for ($ii = 0; $ii < count($this->points) - 1; $ii++) {
            for ($jj = $ii + 1; $jj < count($this->points); $jj++) {
                
                if($this->getDistance($ii, $jj) > $max){
                  $max = $this->getDistance($ii, $jj);
                  $iMax = $ii;
                  $jMax = $jj;
                }
            }
        }
        return  'The longest distance between two points:' . $max . 
            '<br/>' . 'From point ( ' . $this->points[$iMax]->x . ',' . 
                $this->points[$iMax]->y . ') to point (' . 
                $this->points[$jMax]->x . ',' . $this->points[$jMax]->y . ')';
    }
}

$listPoints = new ListPoints();
echo $listPoints->getMaxDistance();

