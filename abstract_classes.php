<?php
//35
require_once 'Classes/User.php';
require_once 'Classes/Employee.php';
require_once 'Classes/Student.php';
require_once 'Classes/Figure.php';
require_once 'Classes/Rectangle.php';

$employeeAnton = new Employee();
$employeeAnton->setName('Anton');
$employeeAnton->setSalary(2500);

echo $employeeAnton->getName() . ' ' . $employeeAnton->getSalary();
echo '<br>';
$employeeAnton->increaseRevenue(500);
echo 'increase salary is - ' . $employeeAnton->getSalary();
echo '<br>';
$employeeAnton->decreaseRevenue(100);
echo 'decrease salary is - ' . $employeeAnton->getSalary();
echo '<br>';

$studentAnya = new Student();
$studentAnya->setName('Anya');
$studentAnya->setScholarship(1000);

echo $studentAnya->getName() . ' ' . $studentAnya->getScholarship();
$studentAnya->increaseRevenue(1000);
echo '<br>';
echo 'increase revenue - ' . $studentAnya->getScholarship();
$studentAnya->decreaseRevenue(10);
echo '<br>';
echo 'decrease revenue - ' . $studentAnya->getScholarship();

echo '<br>';
$rectangle = new Rectangle(2, 4);
echo $rectangle->getSquare() . ' ' . $rectangle->getPerimeter();
echo '<br>';
echo $rectangle->getSquarePerimeterSum();

//36
require_once 'Classes/iFigure.php';
require_once 'Classes/Disk.php';
$disk = new Disk(10);

echo '<br>' . $disk->getSquare() . ' ' . $disk->getPerimeter();