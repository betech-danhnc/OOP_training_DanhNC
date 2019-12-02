<?php
namespace issue001;
/* 
 * Descrip tion of Point
 * 
 * @author DanhNC
 */

// Description of Point
class Point{
    /**
     * Value of x
     * @var Number
     */
    public $x;
    /**
     * Value of y
     * @var Number
     */
    public $y;
    
    /**
     * Set value for point
     * @param Number $x Input x
     * @param Number $y Input y
     */
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}
