<?php

namespace Info;

class Calculator
{
	//instance variables
	public $num1;
	public $num2;

	//Constructor
	public function __construct($num1,$num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	//get method for addition
	public function getSum()
	{
		$number1 = $this->num1;
		$number2 = $this->num2;

		echo $number1 + $number2;

	}

	//get method for subtraction
	public function getDifference()
	{
		$number1 = $this->num1;
		$number2 = $this->num2;

		echo $number1 - $number2;

	}

	//set method to reset values
	public function setValues($num1,$num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;

	}


}

?>

