<?php

namespace Info;


class Student
{	
	// imported trait
	use Teacher;
	
	// Instance variable
	public $age;

	//constructor
	public function __construct($age)
	{
		$this->age = $age;
	}

	//set method to set the student age
	public function setAge($age)
	{
		$this->age = $age;
	}

	//get method to get student age
	public function getAge()
	{
		echo $this->age;
	}

	
}

?>