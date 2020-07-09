<?php

/*
*@author Emmanuel Odonkor Teye-Kofi
*
*/

//creation of trait "Teacher"
trait Teacher
{

	public $skill;

	public function __construct($t_skill)
	{
		$this->skill = $t_skill;
	}

	public function getSkill()
	{
		echo "Programming";
	}
}


//creation of an interface
interface information
{
	public function getName();
}

//creation of a class that implements an interface and uses a class
class Student implements information
{
	//import trait Teacher
	use Teacher;
	
	//Attrubutes / Instance variable
	public $age = 0;

	//constructor
	public function __construct($stu_age)
	{

		$this->age = $stu_age;
	}

	//GET method(getters)
	public function getAge()
	{
		echo $this->age;

	}

	//GET method(getters)
	public function getName()
	{
		echo "Emmanuel";
	}

	//SET method
	public function setAge($age)
	{
		$this->age = $age;
	}
}

?>