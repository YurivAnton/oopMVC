<?php
class Arr{
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
}
