<?php
class City{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population) {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

    public function getName() {
        return $this->name;
    }

    public function getFoundation() {
        return $this->foundation;
    }

    public function getPopulation() {
        return $this->population;
    }
}
