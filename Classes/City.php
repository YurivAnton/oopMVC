<?php
class City{
    private $name;
    private $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }

    public function getName() {
        return $this->name;
    }

    public function getPopulation() {
        return $this->population;
    }
}
