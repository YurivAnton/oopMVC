<?php
//class Employee extends User
class Employee
{
    /* 
    //
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    } */

    //22
    /* private $salary;

    public function __construct($name, $surname, $birthday, $salary) {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    } */

    //28
    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, Post $post) {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getPost() {
        return $this->post;
    }

    public function changePost(Post $post) {
        $this->post = $post;
    }
}