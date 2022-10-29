<?php
/*
class Student extends User
{
    private $name;
    private $course;

    public function __construct($name) {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function transferToNextCourse() {
        if($this->course < 5) {
            $this->course++;
        }
    }
     */
/*
    private $course;

	public function setAge($age)
	{
		if ($age <= 25) {
			parent::setAge($age);
		}
	}

    public function setName($name)
    {
        if(strlen($name) < 10) {
            parent::setName($name);
        }
    }

	public function getCourse()
	{
		return $this->course;
	}

	public function setCourse($course)
	{
		$this->course = $course;
	}
}
 */
//35
class Student extends User{
    private $scholarship;

    public function getScholarship() {
        return $this->scholarship;
    }

    public function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value) {
        $this->scholarship = $this->scholarship + $value;
    }
}

