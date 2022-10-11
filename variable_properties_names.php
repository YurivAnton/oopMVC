<?php
require_once 'Classes/City.php';

$city = new City('Dolyna', 1500, 22000);
$props = ['name', 'foundation', 'population'];
foreach($props as $prop) {
    echo $city->$prop;
    echo '<br>';
}
