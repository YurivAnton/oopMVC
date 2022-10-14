<?php
require_once 'Classes/ArrayAvgHelper.php';
$arr = [1, 2, 2];

$arrayAvgHelper = new ArrayAvgHelper();
echo $arrayAvgHelper->getAvg1($arr);
echo '<br>';
echo $arrayAvgHelper->getAvg2($arr);
echo '<br>';
echo $arrayAvgHelper->getAvg3($arr);
echo '<br>';
echo $arrayAvgHelper->getAvg4($arr);
