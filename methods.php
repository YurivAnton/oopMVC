<?php
class User{
    public $name;
    public $age;
    public $salary;

    public function show($str) {
        return $str . '!!!';
    }
}
    
$user = new User();
$user->name = 'Anton';
$user->age = 35;
$user->salary = 2500;
echo $user->show('Hello World');

