<?php
require_once 'Classes/Student.php';

$student = new Student('Anton');
echo $student->getName() . ' ' . $student->getCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
echo '<br>' . $student->getCourse();
