<?php
class FiguresCollection {
    private $figureCollection = [];

    public function addFigure(iFigure $figure) {
        $this->figureCollection[] = $figure;
    }

    public function getTotalSquare() {
        $result = 0;

        foreach($this->figureCollection as $figure) {
            $result += $figure->getSquare();
        }

        return $result;
    }

    public function getTotalPerimeter() {
        $result = 0;

        foreach($this->figureCollection as $figure) {
            $result += $figure->getPerimeter();
        }

        return $result;
    }
}