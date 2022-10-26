<?php
class AvgHelper{
    public function getAvg($arr) {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare($arr) {
        $sum = 0;
        foreach($arr as $elem) {
            $sum += pow($elem, 2);
        }
        return pow($sum, 1/2) / count($arr);
    }
}
