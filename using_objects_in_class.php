<?php
require_once 'Classes/Arr.php';
require_once 'Classes/SumHelper.php';
require_once 'Classes/AvgHelper.php';

$arr = new Arr();
$arr->add(1);
$arr->add(2);
$arr->add(3);

echo $arr->getSum23();
echo '<br>';
echo $arr->getAvgMeanSum();
