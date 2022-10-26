<?php
require_once 'Classes/Post.php';
require_once 'Classes/Employee.php';

$programmer = new Post('programmer', 2500);
$manager = new Post('manager', 2000);
$driver = new Post('driver', 1500);

$employeeAnton = new Employee('Anton', 'Yuriv', $programmer);
echo $employeeAnton->getName();
echo '<br>';
echo $employeeAnton->getSurname();
echo '<br>';
echo $employeeAnton->getPost()->getName();
echo '<br>';
echo $employeeAnton->getPost()->getSalary();
$employeeAnton->changePost($manager);
echo '<br>';
echo $employeeAnton->getPost()->getSalary();