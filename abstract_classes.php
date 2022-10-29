<?php
require_once 'Classes/User.php';
require_once 'Classes/Employee.php';
require_once 'Classes/Student.php';

$employeeAnton = new Employee();
$employeeAnton->setName('Anton');
$employeeAnton->setSalary(2500);

echo $employeeAnton->getName() . ' ' . $employeeAnton->getSalary();
echo '<br>';
$employeeAnton->increaseRevenue(500);
echo 'increase salary is - ' . $employeeAnton->getSalary();
echo '<br>';

$studentAnya = new Student();
$studentAnya->setName('Anya');
$studentAnya->setScholarship(1000);

echo $studentAnya->getName() . ' ' . $studentAnya->getScholarship();
$studentAnya->increaseRevenue(1000);
echo '<br>';
echo 'increase revenue - ' . $studentAnya->getScholarship();
