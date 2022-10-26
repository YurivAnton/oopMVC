<?php
class Arr{
    /*
    private $numbers = [];

    public function add(array $nums) {
        foreach($nums as $num) {
            array_push($this->numbers, $num);
        }
    }

    public function getSum() {
        return array_sum($this->numbers);
    }

    public function getAvg() {
        return $this->getSum() / count($this->numbers);
    }
     */
    private $nums = [];
    private $sumHelper;
    private $avgHelper;

    public function __construct() {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }

    public function getSum23() {
        $nums = $this->nums;

        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function getAvgMeanSum() {
        $nums = $this->nums;

        return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
    }
    public function add($num) {
        $this->nums[] =$num;
    }
}
