<?php
require_once 'Classes/City.php';

$cities = [
    new City('Bratislava', 500000),
    new City('Dolyna', 20000),
    new City('Kyiv', 1000000)
];

foreach($cities as $city) {
    echo $city->getName() . ' ' . $city->getPopulation();
    echo '<br>';
}
