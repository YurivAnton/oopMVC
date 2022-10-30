<?php
//35
/* class Rectangle extends Figure {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare() {
        return $this->a * $this->b;
    }

    public function getPerimeter() {
        return 2 * $this->a + 2 * $this->b;
    }
} */

//37
class Rectangle implements iFigure {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare() {
        return $this->a * $this->b;
    }

    public function getPerimeter() {
        return 2 * $this->a + 2 * $this->b;
    }
} 