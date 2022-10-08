<?php
require_once 'Classes/Arr.php';

$arr = new Arr();
$arr->add([1,2,3,4]);
var_dump($arr);
echo $arr->getSum() . ' ' . $arr->getAvg();
